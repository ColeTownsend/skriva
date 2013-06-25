//	HYPE.documents["like!"]

(function HYPE_DocumentLoader() {
	var resourcesFolderName = "like%21.hyperesources";
	var documentName = "like!";
	var documentLoaderFilename = "like_hype_generated_script.js";
	var mainContainerID = "like_hype_container";

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
	if(typeof HYPE_160 == "undefined") {
		if(typeof window.HYPE_160_DocumentsToLoad == "undefined") {
			window.HYPE_160_DocumentsToLoad = new Array();
			window.HYPE_160_DocumentsToLoad.push(HYPE_DocumentLoader);

			var headElement = document.getElementsByTagName('head')[0];
			var scriptElement = document.createElement('script');
			scriptElement.type= 'text/javascript';
			scriptElement.src = resourcesFolderName + '/' + 'HYPE.js?hype_version=160';
			headElement.appendChild(scriptElement);
		} else {
			window.HYPE_160_DocumentsToLoad.push(HYPE_DocumentLoader);
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
	
	var hypeDoc = new HYPE_160();
	
	var attributeTransformerMapping = {b:"i",c:"i",bC:"i",d:"i",aS:"i",M:"i",e:"f",aT:"i",N:"i",f:"d",O:"i",g:"c",aU:"i",P:"i",Q:"i",aV:"i",R:"c",bG:"f",aW:"f",aI:"i",S:"i",bH:"d",l:"d",aX:"i",T:"i",m:"c",bI:"f",aJ:"i",n:"c",aK:"i",bJ:"f",X:"i",aL:"i",A:"c",aZ:"i",Y:"bM",B:"c",bK:"f",bL:"f",C:"c",D:"c",t:"i",E:"i",G:"c",bA:"c",a:"i",bB:"i"};
	
	var resources = {"0":{n:"Screen%20Shot%202013-04-10%20at%204.34.23%20PM.png",p:1},"1":{n:"star.svg",p:1}};
	
	var scenes = [{x:0,p:"600px",c:"#FFFFFF",v:{"2":{o:"content-box",h:"0",aD:[],x:"visible",a:0,q:"100% 100%",b:-1,j:"absolute",r:"inline",aA:[],k:"div",c:346,d:346,z:"1",aP:"default"},"3":{aU:-4,bB:0,c:40,q:"100% 100%",b:136,aV:-4,r:"inline",d:40,e:"0.000000",bC:0,aW:"0.000000",bD:"none",t:15,S:0,aX:0,aP:"pointer",h:"1",w:"",j:"absolute",aA:[],aZ:0,k:"div",x:"visible",Q:0,z:"2",aS:-4,R:"#000000",aT:-4,a:67,o:"content-box",bA:"#000000",T:0},"5":{c:188,d:192,I:"None",J:"None",bD:"none",K:"None",L:"None",aP:"pointer",M:0,N:0,A:"#A0A0A0",x:"visible",j:"absolute",B:"#A0A0A0",k:"div",aA:[{type:3,timelineIdentifier:"kTimelineDefaultIdentifier"}],O:0,z:"3",P:0,D:"#A0A0A0",C:"#A0A0A0",a:0,b:65}},n:"Untitled Scene",onSceneLoadActions:[{type:7,timelineIdentifier:"kTimelineDefaultIdentifier"}],T:{kTimelineDefaultIdentifier:{d:0.16,i:"kTimelineDefaultIdentifier",n:"Main Timeline",a:[{f:"2",t:0,d:0.07,i:"e",e:"1.000000",s:"0.000000",o:"3"},{f:"4",t:0,d:0.16,i:"d",e:61,s:40,o:"3"},{f:"4",t:0,d:0.16,i:"c",e:61,s:40,o:"3"},{f:"4",t:0.07,d:0.08,i:"e",e:"0.000000",s:"1.000000",o:"3"}],f:30}},o:"1"}];
	
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
	hypeDoc.setShowLoadingPage(true);
	hypeDoc.setDrawSceneBackgrounds(true);
	hypeDoc.setGraphicsAcceleration(true);
	hypeDoc.setDocumentName(documentName);

	HYPE.documents[documentName] = hypeDoc.API;
	document.getElementById(mainContainerID).setAttribute("HYPE_documentName", documentName);

	hypeDoc.documentLoad(this.body);
}());

