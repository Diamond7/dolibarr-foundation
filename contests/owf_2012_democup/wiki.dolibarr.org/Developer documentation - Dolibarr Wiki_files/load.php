var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mediaWiki.loader.register([["site","1347719598",[],"site"],["startup","20120923103102",[],"startup"],["user","1347719598",[],"user"],["user.options","1347719598",[],"private"],["skins.vector","1347719598",[]],["skins.monobook","1347719598",[]],["skins.simple","1347719598",[]],["skins.chick","1347719598",[]],["skins.modern","1347719598",[]],["skins.cologneblue","1347719598",[]],["skins.nostalgia","1347719598",[]],["skins.standard","1347719598",[]],["jquery","1347719598",[]],["jquery.async","1347719598",[]],["jquery.autoEllipsis","1347719598",["jquery.highlightText"]],["jquery.checkboxShiftClick","1347719598",[]],["jquery.client","1347719598",[]],["jquery.collapsibleTabs","1347719598",[]],["jquery.color","1347719598",[]],["jquery.cookie","1347719598",[]],["jquery.delayedBind","1347719598",[]],[
"jquery.expandableField","1347719598",[]],["jquery.highlightText","1347719598",[]],["jquery.placeholder","1347719598",[]],["jquery.localize","1347719598",[]],["jquery.suggestions","1347719598",["jquery.autoEllipsis"]],["jquery.tabIndex","1347719598",[]],["jquery.textSelection","1347719598",[]],["jquery.tipsy","1347719598",[]],["jquery.ui.core","1347719598",["jquery"]],["jquery.ui.widget","1347719598",[]],["jquery.ui.mouse","1347719598",["jquery.ui.widget"]],["jquery.ui.position","1347719598",[]],["jquery.ui.draggable","1347719598",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"]],["jquery.ui.droppable","1347719598",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"]],["jquery.ui.resizable","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.selectable","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.sortable","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],[
"jquery.ui.accordion","1347719598",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.autocomplete","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"]],["jquery.ui.button","1347719598",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.datepicker","1347719598",["jquery.ui.core"]],["jquery.ui.dialog","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"]],["jquery.ui.progressbar","1347719598",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.slider","1347719598",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.tabs","1347719598",["jquery.ui.core","jquery.ui.widget"]],["jquery.effects.core","1347719598",["jquery"]],["jquery.effects.blind","1347719598",["jquery.effects.core"]],["jquery.effects.bounce","1347719598",["jquery.effects.core"]],["jquery.effects.clip","1347719598",["jquery.effects.core"]],["jquery.effects.drop","1347719598",[
"jquery.effects.core"]],["jquery.effects.explode","1347719598",["jquery.effects.core"]],["jquery.effects.fold","1347719598",["jquery.effects.core"]],["jquery.effects.highlight","1347719598",["jquery.effects.core"]],["jquery.effects.pulsate","1347719598",["jquery.effects.core"]],["jquery.effects.scale","1347719598",["jquery.effects.core"]],["jquery.effects.shake","1347719598",["jquery.effects.core"]],["jquery.effects.slide","1347719598",["jquery.effects.core"]],["jquery.effects.transfer","1347719598",["jquery.effects.core"]],["mediawiki","1347719598",[]],["mediawiki.util","1347719598",["jquery.checkboxShiftClick","jquery.client","jquery.placeholder"]],["mediawiki.action.history","1347719598",["mediawiki.legacy.history"]],["mediawiki.action.edit","1347719598",[]],["mediawiki.action.view.rightClickEdit","1347719598",[]],["mediawiki.special.preferences","20120923103102",[]],["mediawiki.special.search","1347719598",[]],["mediawiki.language","1347719598",[]],["mediawiki.legacy.ajax",
"20120915143816",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.ajaxwatch","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.block","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1347719598",[]],["mediawiki.legacy.config","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.diff","1347719598",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.edit","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.enhancedchanges","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.history","1347719598",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.htmlform","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.metadata","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.prefs","1347719598",[
"mediawiki.legacy.wikibits","mediawiki.legacy.htmlform"]],["mediawiki.legacy.preview","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.search","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.shared","1347719598",[]],["mediawiki.legacy.oldshared","1347719598",[]],["mediawiki.legacy.upload","1347719598",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.wikibits","20120915143817",["mediawiki.language"]],["mediawiki.legacy.wikiprintable","1347719598",[]]]);mediaWiki.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"dolibarr","stylepath":"/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,
"wgActionPaths":[],"wgServer":"http://wiki.dolibarr.org","wgUserLanguage":"fr","wgContentLanguage":"en","wgVersion":"1.17.0","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Dolibarr Wiki","5":"Dolibarr Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Draft","101":"Draft talk","110":"Archive","111":"Archive talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"dolibarr_wiki":4,"dolibarr_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"draft":100,"draft_talk":101,"archive":110,"archive_talk":111,"image":6,"image_talk":7
},"wgSiteName":"Dolibarr Wiki","wgFileExtensions":["avi","xvid","mp3","png","jpg","jpeg","svg","odf","ods","odt","odg","odp","sxc","pdf","nse","xpi","zip","tgz","gz","deb","rpm","aps"],"wgDBname":"dolibarrwiki","wgExtensionAssetsPath":"/extensions","wgResourceLoaderMaxQueryLength":-1});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=fr\x26amp;modules=jquery%7Cmediawiki\x26amp;only=scripts\x26amp;skin=dolibarr\x26amp;version=20110608T121000Z\"\x3e\x3c/script\x3e");}delete isCompatible;;