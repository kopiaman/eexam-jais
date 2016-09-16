
Runner.pages.PageSettings.addPageEvent("marking_AS",Runner.pages.constants.PAGE_IMPORT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CLOSE';if(!pageObj.buttonEventBefore['CLOSE']){pageObj.buttonEventBefore['CLOSE']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['CLOSE']){pageObj.buttonEventAfter['CLOSE']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.close()}}
$('a[id=CLOSE]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="CLOSE"+"_"+Runner.genId();var button_CLOSE=new Runner.form.Button({id:this.id,btnName:"CLOSE"});button_CLOSE.init({args:[pageObj,proxy,pageid]});});});