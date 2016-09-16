
Runner.pages.PageSettings.addPageEvent("marking_BA",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE_WINDOW';if(!pageObj.buttonEventBefore['CLOSE_WINDOW']){pageObj.buttonEventBefore['CLOSE_WINDOW']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE_WINDOW']){pageObj.buttonEventAfter['CLOSE_WINDOW']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE_WINDOW]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE_WINDOW"+"_"+Runner.genId();var button_CLOSE_WINDOW=new Runner.form.Button({id:this.id,btnName:"CLOSE_WINDOW"});button_CLOSE_WINDOW.init({args:[pageObj,proxy,pageid]});});});