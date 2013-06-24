//	HYPE.documents["anim"]

(function HYPE_DocumentLoader() {
	var resourcesFolderName = "anim.resources";
	var documentName = "anim";
	var documentLoaderFilename = "anim_hype_generated_script.js";
	var mainContainerID = "anim_hype_container";

	// find the URL for this script's absolute path and set as the resourceFolderName
	try {
		var scripts = document.getElementsByTagName('script');
		for(var i = 0; i < scripts.length; i++) {
			var scriptSrc = scripts[i].src;
			if(scriptSrc != null && scriptSrc.indexOf(documentLoaderFilename) != -1) {
				resourcesFolderName = scriptSrc.substr(0, scriptSrc.lastIndexOf("/"));
				break;
			}
		}
	} catch(err) {	}

	// Legacy support
	if (typeof window.HYPE_DocumentsToLoad == "undefined") {
		window.HYPE_DocumentsToLoad = new Array();
	}
 
	// load HYPE.js if it hasn't been loaded yet
	if(typeof HYPE_150 == "undefined") {
		if(typeof window.HYPE_150_DocumentsToLoad == "undefined") {
			window.HYPE_150_DocumentsToLoad = new Array();
			window.HYPE_150_DocumentsToLoad.push(HYPE_DocumentLoader);

			var headElement = document.getElementsByTagName('head')[0];
			var scriptElement = document.createElement('script');
			scriptElement.type= 'text/javascript';
			scriptElement.src = resourcesFolderName + '/' + 'HYPE.js?hype_version=150';
			headElement.appendChild(scriptElement);
		} else {
			window.HYPE_150_DocumentsToLoad.push(HYPE_DocumentLoader);
		}
		return;
	}
	
	// handle attempting to load multiple times
	if(HYPE.documents[documentName] != null) {
		var index = 1;
		var originalDocumentName = documentName;
		do {
			documentName = "" + originalDocumentName + "-" + (index++);
		} while(HYPE.documents[documentName] != null);
		
		var allDivs = document.getElementsByTagName("div");
		var foundEligibleContainer = false;
		for(var i = 0; i < allDivs.length; i++) {
			if(allDivs[i].id == mainContainerID && allDivs[i].getAttribute("HYPE_documentName") == null) {
				var index = 1;
				var originalMainContainerID = mainContainerID;
				do {
					mainContainerID = "" + originalMainContainerID + "-" + (index++);
				} while(document.getElementById(mainContainerID) != null);
				
				allDivs[i].id = mainContainerID;
				foundEligibleContainer = true;
				break;
			}
		}
		
		if(foundEligibleContainer == false) {
			return;
		}
	}
	
	var hypeDoc = new HYPE_150();
	
	var attributeTransformerMapping = {b:"i",c:"i",bC:"i",d:"i",aS:"i",M:"i",e:"f",N:"i",f:"d",aT:"i",O:"i",g:"c",aU:"i",P:"i",Q:"i",aV:"i",R:"c",bG:"f",aW:"f",S:"i",aI:"i",bH:"d",l:"d",aX:"i",T:"i",m:"c",bI:"f",aJ:"i",n:"c",aK:"i",bJ:"f",aZ:"i",X:"i",A:"c",bK:"f",Y:"bM",B:"c",aL:"i",C:"c",bL:"f",D:"c",t:"i",E:"i",G:"c",bA:"c",a:"i",bB:"i"};
	
	var resources = {"3":{n:"face4.svg",p:1},"1":{n:"face2.svg",p:1},"2":{n:"face3.svg",p:1},"0":{n:"face1.svg",p:1}};
	
	var scenes = [{x:0,p:"600px",c:"#EC6F66",onSceneTimelineCompleteActions:[{type:3,timelineIdentifier:"kTimelineDefaultIdentifier"}],v:{"3":{o:"content-box",h:"1",aD:[{type:9,timelineIdentifier:"kTimelineDefaultIdentifier",goToTime:4.3333334922790527}],x:"visible",a:100,q:"100% 100%",b:100,j:"absolute",r:"inline",c:200,z:"3",k:"div",d:200,e:"0.000000",bD:"none"},"4":{o:"content-box",h:"2",aD:[{type:9,timelineIdentifier:"kTimelineDefaultIdentifier",goToTime:4.3333334922790527}],x:"visible",a:100,q:"100% 100%",b:100,j:"absolute",r:"inline",c:200,z:"2",k:"div",d:200,e:"1.000000",bD:"none"},"2":{o:"content-box",h:"0",aD:[{type:9,timelineIdentifier:"kTimelineDefaultIdentifier",goToTime:4.3333334922790527}],x:"visible",a:100,q:"100% 100%",b:100,j:"absolute",r:"inline",c:200,z:"5",k:"div",d:200,e:"1.000000",bD:"none"},"7":{o:"content-box",w:"",h:"3",aD:[{type:9,timelineIdentifier:"kTimelineDefaultIdentifier",goToTime:4.3333334922790527}],x:"visible",a:100,q:"100% 100%",b:100,j:"absolute",r:"inline",c:200,z:"1",k:"div",d:200,t:17,e:"1.000000",bD:"none"}},n:"Untitled Scene",T:{kTimelineDefaultIdentifier:{d:4.16,i:"kTimelineDefaultIdentifier",n:"Main Timeline",a:[{f:"1",t:4.1,d:0.01,i:"e",e:"0.000000",s:"1.000000",o:"2"},{f:"2",t:4.12,d:0.01,i:"e",e:"0.000000",s:"1.000000",o:"4"},{f:"2",t:4.13,d:0,i:"e",e:"1.000000",s:"0.000000",o:"3"},{f:"2",t:4.15,d:0.01,i:"e",e:"1.000000",s:"1.000000",o:"7"}],f:30}},o:"1"}];
	
	var javascripts = [];
	
	var functions = {};
	var javascriptMapping = {};
	for(var i = 0; i < javascripts.length; i++) {
		try {
			javascriptMapping[javascripts[i].identifier] = javascripts[i].name;
			eval("functions." + javascripts[i].name + " = " + javascripts[i].source);
		} catch (e) {
			hypeDoc.log(e);
			functions[javascripts[i].name] = (function () {});
		}
	}
	
	hypeDoc.setAttributeTransformerMapping(attributeTransformerMapping);
	hypeDoc.setResources(resources);
	hypeDoc.setScenes(scenes);
	hypeDoc.setJavascriptMapping(javascriptMapping);
	hypeDoc.functions = functions;
	hypeDoc.setCurrentSceneIndex(0);
	hypeDoc.setMainContentContainerID(mainContainerID);
	hypeDoc.setResourcesFolderName(resourcesFolderName);
	hypeDoc.setShowHypeBuiltWatermark(0);
	hypeDoc.setShowLoadingPage(false);
	hypeDoc.setDrawSceneBackgrounds(true);
	hypeDoc.setGraphicsAcceleration(true);
	hypeDoc.setDocumentName(documentName);

	HYPE.documents[documentName] = hypeDoc.API;
	document.getElementById(mainContainerID).setAttribute("HYPE_documentName", documentName);

	hypeDoc.documentLoad(this.body);
}());

