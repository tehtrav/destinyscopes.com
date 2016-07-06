
var fs = require('fs');

function load(file) {
  return new Promise(function(resolve, reject) {
    fs.readFile(file, 'utf8', function(err, data) {
      if (err) {
        console.log("No manifest found", err);
        reject(err);
      }
      resolve(JSON.parse(data));
    });
  });
}

function getObjects(obj, key, val) {
  var objects = [];
  for (var i in obj) {
    if (!obj.hasOwnProperty(i)) continue;
    if (typeof obj[i] == 'object') {
      objects = objects.concat(getObjects(obj[i], key, val));    
    } else 
    //if key matches and value matches or if key matches and value is not passed (eliminating the case where key matches but passed value does not)
    if (i == key && obj[i] == val || i == key && val == '') { //
      objects.push(obj.nodeStepHash);
    }
  }
  return objects;
}

Promise.all([load('manifest.json'), load('resources/data/scopes.json')]).then(function(resolves) {

  resolves[0]; // manifest
  resolves[1]; // scopes

  // example:
  // 2957484368 -> SLO-19
  resolves[1].forEach(function(item) {    
    var hash = getObjects(resolves[0], 'nodeStepName', item.Name);
    item.Hash = hash[0];
    // console.log(item.Name, hash[0]);
  });

  fs.writeFile("resources/data/_scopes.json", JSON.stringify(resolves[1], null, 2), function(err) {
    if(err) {
      console.log(err);
    }
    console.log("The file was saved!");
  }); 

});