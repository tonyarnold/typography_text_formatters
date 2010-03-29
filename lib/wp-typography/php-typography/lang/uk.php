<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-uk.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% This file is part of hyph-utf8 package and resulted from
		% semi-manual conversions of hyphenation patterns into UTF-8 in June 2008.
		%
		% Source: TODO:WRITEME (yyyy-mm-dd)
		% Author: Maksym Polyakov <polyama at auburn.edu>, <mpoliak at i.com.ua>
		%
		% The above mentioned file should become obsolete,
		% and the author of the original file should preferaby modify this file instead.
		%
		% Modificatios were needed in order to support native UTF-8 engines,
		% but functionality (hopefully) didn't change in any way, at least not intentionally.
		% This file is no longer stand-alone; at least for 8-bit engines
		% you probably want to use loadhyph-foo.tex (which will load this file) instead.
		%
		% Modifications were done by Jonathan Kew, Mojca Miklavec & Arthur Reutenauer
		% with help & support from:
		% - Karl Berry, who gave us free hands and all resources
		% - Taco Hoekwater, with useful macros
		% - Hans Hagen, who did the unicodifisation of patterns already long before
		%               and helped with testing, suggestions and bug reports
		% - Norbert Preining, who tested & integrated patterns into TeX Live
		%
		% However, the "copyright/copyleft" owner of patterns remains the original author.
		%
		% The copyright statement of this file is thus:
		%
		%    Do with this file whatever needs to be done in future for the sake of
		%    "a better world" as long as you respect the copyright of original file.
		%    If you're the original author of patterns or taking over a new revolution,
		%    plese remove all of the TUG comments & credits that we added here -
		%    you are the Queen / the King, we are only the servants.
		%
		% If you want to change this file, rather than uploading directly to CTAN,
		% we would be grateful if you could send it to us (http://tug.org/tex-hyphen)
		% or ask for credentials for SVN repository and commit it yourself;
		% we will then upload the whole "package" to CTAN.
		%
		% Before a new "pattern-revolution" starts,
		% please try to follow some guidelines if possible:
		%
		% - \lccode is *forbidden*, and I really mean it
		% - all the patterns should be in UTF-8
		% - the only "allowed" TeX commands in this file are: \patterns, \hyphenation,
		%   and if you really cannot do without, also \input and \message
		% - in particular, please no \catcode or \lccode changes,
		%   they belong to loadhyph-foo.tex,
		%   and no \lefthyphenmin and \righthyphenmin,
		%   they have no influence here and belong elsewhere
		% - \begingroup and/or \endinput is not needed
		% - feel free to do whatever you want inside comments
		%
		% We know that TeX is extremely powerful, but give a stupid parser
		% at least a chance to read your patterns.
		%
		% For more unformation see
		%
		%    http://tug.org/tex-hyphen
		%
		%------------------------------------------------------------------------------
		%
		% Ukrainian hyphenation patterns in LCY (cp866nav) encoding.    
		% Copyright 1998-2001 Maksym Polyakov.                          
		% Released 2001/05/10.
		% This file can be redistributed and/or modified                
		% under the terms of the LaTeX Project Public License (lppl).   
		% Please, send bug reports via e-mail:                          
		%   polyama@auburn.edu                                          
		%   mpoliak@i.com.ua                                            

//============================================================================================================	
	
*/

$patgenLanguage = "Ukrainian";

$patgenExceptions = array();

$patgenMaxSeg = 12;

$patgen = array(
'begin'=>array(
"б'"=>"008",
"в'"=>"008",
"д'"=>"008",
"з'"=>"008",
"м'"=>"008",
"н'"=>"008",
"п'"=>"008",
"р'"=>"008",
"т'"=>"008",
"ф'"=>"008",
"ш'"=>"008",
"бд"=>"006",
"бр"=>"006",
"вб"=>"006",
"вб'"=>"0066",
"вв'"=>"0066",
"вг"=>"006",
"вд"=>"006",
"вж"=>"006",
"вз"=>"006",
"взд"=>"0066",
"вк"=>"006",
"вл"=>"006",
"вм"=>"006",
"вм'"=>"0066",
"вп"=>"006",
"вп'"=>"0066",
"впх"=>"0066",
"вс"=>"006",
"вст"=>"0066",
"вт"=>"006",
"вшк"=>"0066",
"дж"=>"006",
"дз"=>"006",
"дл"=>"006",
"дс"=>"006",
"зб"=>"006",
"зв'"=>"0066",
"зг"=>"006",
"зд"=>"006",
"здз"=>"0066",
"зл"=>"006",
"зм'"=>"0066",
"зс"=>"006",
"зск"=>"0066",
"зст"=>"0066",
"зч"=>"006",
"зш"=>"006",
"зшк"=>"0066",
"зґ"=>"006",
"йш"=>"006",
"кл"=>"006",
"кп"=>"006",
"кс"=>"006",
"кх"=>"006",
"кш"=>"006",
"лкс"=>"0066",
"лс"=>"006",
"ль"=>"006",
"мс"=>"006",
"мф"=>"006",
"нб"=>"006",
"пр"=>"006",
"пс"=>"006",
"пх"=>"006",
"рт"=>"006",
"ск"=>"006",
"скл"=>"0066",
"сл"=>"006",
"сп"=>"006",
"сп'"=>"0066",
"спл"=>"0066",
"спх"=>"0066",
"ст"=>"006",
"сх"=>"006",
"схл"=>"0066",
"тк"=>"006",
"тр"=>"006",
"тх"=>"006",
"ть"=>"006",
"фл"=>"006",
"хл"=>"006",
"ць"=>"006",
"чх"=>"006",
"шк"=>"006",
"шл"=>"006",
"шп"=>"006",
"шт"=>"006",
"без'"=>"00403",
"без"=>"0043",
"безу"=>"00004",
"безод"=>"005430",
"безособ"=>"00054000",
"безвід"=>"0000043",
"безроз"=>"0003043",
"відом"=>"005400",
"відозв"=>"0054000",
"відун"=>"005400",
"віда"=>"00540",
"відер"=>"005400",
"віді"=>"00540",
"від"=>"0043",
"від'"=>"00003",
"між"=>"0043",
"передбач"=>"000043000",
"передвиб"=>"000043000",
"передг"=>"0000430",
"передд"=>"0000430",
"передм"=>"0000430",
"передост"=>"000043000",
"передпла"=>"000043000",
"передпок"=>"000043000",
"передр"=>"0000430",
"передсв"=>"00004300",
"передумов"=>"0000430000",
"передусі"=>"000043000",
"передфр"=>"00004300",
"передч"=>"0000430",
"перед'"=>"0000403",
"пере"=>"00003",
"понад"=>"000043",
"понаді"=>"0000540",
"понади"=>"0000540",
"понадя"=>"0000540",
"підо"=>"00540",
"піді"=>"00540",
"під'"=>"00003",
"під"=>"0043",
"піде"=>"00540",
"піди"=>"00540",
"піду"=>"00540",
"пів"=>"0043",
"спів"=>"00043",
"напів"=>"000043",
"розі"=>"00540",
"розе"=>"00540",
"роза"=>"00540",
"роз'"=>"00403",
"роз"=>"0043",
"через'"=>"0000403",
"через"=>"000043",
"заїк"=>"00040",
"заїц"=>"00040",
"заїч"=>"00040",
"наїд"=>"00040",
"безе"=>"00500",
"доїв"=>"00040",
"доїл"=>"00040",
"доїль"=>"000500",
"пої"=>"0004",
"пеом"=>"00400",
"бліцана"=>"00043000",
"бліцкриг"=>"000430000",
"бліцопит"=>"000430000",
"бліцторг"=>"000430000",
"бліцтур"=>"00043000",
"бліціспит"=>"0004340000",
"навч"=>"00340",
"вивч"=>"00340",
"довч"=>"00340",
"завч"=>"00340",
"повч"=>"00340",
"привч"=>"000340",
"омрі"=>"00400",
"вимр"=>"00340",
"відімр"=>"0000340",
"завмр"=>"000340",
"замр"=>"00340",
"зімр"=>"00340",
"намр"=>"00340",
"перемр"=>"0000340",
"помр"=>"00340",
"примр"=>"000340",
"розмр"=>"000340",
"умри"=>"00400",
"умрі"=>"00400",
"умру"=>"00400",
"умре"=>"00400"
),
'end'=>array(
"бв"=>"600",
"бз"=>"600",
"бй"=>"600",
"бл"=>"600",
"бль"=>"6600",
"бн"=>"600",
"бр"=>"600",
"бс"=>"600",
"бст"=>"6600",
"бств"=>"66600",
"бстр"=>"66600",
"бськ"=>"66600",
"бць"=>"6600",
"вб"=>"600",
"вв"=>"600",
"вд"=>"600",
"вдр"=>"6600",
"вдь"=>"6600",
"вж"=>"600",
"вз"=>"600",
"взь"=>"6600",
"вй"=>"600",
"вк"=>"600",
"вл"=>"600",
"вль"=>"6600",
"вм"=>"600",
"вн"=>"600",
"вп"=>"600",
"вр"=>"600",
"вс"=>"600",
"вств"=>"66600",
"всть"=>"66600",
"всь"=>"6600",
"вськ"=>"66600",
"вт"=>"600",
"вх"=>"600",
"вць"=>"6600",
"вч"=>"600",
"вш"=>"600",
"вщ"=>"600",
"гв"=>"600",
"гг"=>"600",
"гд"=>"600",
"гл"=>"600",
"гль"=>"6600",
"гм"=>"600",
"гн"=>"600",
"гр"=>"600",
"гс"=>"600",
"гств"=>"66600",
"гсь"=>"6600",
"гт"=>"600",
"дж"=>"600",
"дз"=>"600",
"дзь"=>"6600",
"дл"=>"600",
"дм"=>"600",
"дн"=>"600",
"др"=>"600",
"дств"=>"66600",
"дськ"=>"66600",
"дт"=>"600",
"дь"=>"600",
"дьсь"=>"66600",
"жб"=>"600",
"жв"=>"600",
"ждь"=>"6600",
"жсь"=>"6600",
"зв"=>"600",
"зг"=>"600",
"зд"=>"600",
"здв"=>"6600",
"здн"=>"6600",
"здь"=>"6600",
"зк"=>"600",
"зл"=>"600",
"зм"=>"600",
"зн"=>"600",
"знь"=>"6600",
"зр"=>"600",
"зсь"=>"6600",
"зь"=>"600",
"зьб"=>"6600",
"зьк"=>"6600",
"йб"=>"600",
"йв"=>"600",
"йг"=>"600",
"йд"=>"600",
"йз"=>"600",
"йк"=>"600",
"йкл"=>"6600",
"йл"=>"600",
"йль"=>"6600",
"йм"=>"600",
"ймс"=>"6600",
"йн"=>"600",
"йнс"=>"6600",
"йп"=>"600",
"йр"=>"600",
"йс"=>"600",
"йст"=>"6600",
"йств"=>"66600",
"йстр"=>"66600",
"йсь"=>"6600",
"йськ"=>"66600",
"йт"=>"600",
"йтс"=>"6600",
"йф"=>"600",
"йх"=>"600",
"йц"=>"600",
"йч"=>"600",
"йш"=>"600",
"кв"=>"600",
"кк"=>"600",
"кл"=>"600",
"кль"=>"6600",
"кр"=>"600",
"кс"=>"600",
"кст"=>"6600",
"ксь"=>"6600",
"кт"=>"600",
"ктр"=>"6600",
"кх"=>"600",
"кш"=>"600",
"лб"=>"600",
"лг"=>"600",
"лд"=>"600",
"лк"=>"600",
"лл"=>"600",
"лль"=>"6600",
"лм"=>"600",
"лмс"=>"6600",
"лн"=>"600",
"лп"=>"600",
"лс"=>"600",
"лт"=>"600",
"лхв"=>"6600",
"ль"=>"600",
"льб"=>"6600",
"льв"=>"6600",
"льг"=>"6600",
"льд"=>"6600",
"льдс"=>"66600",
"льз"=>"6600",
"льк"=>"6600",
"льм"=>"6600",
"льн"=>"6600",
"льп"=>"6600",
"льс"=>"6600",
"льств"=>"666000",
"льсь"=>"66600",
"льськ"=>"666000",
"льт"=>"6600",
"льтр"=>"66600",
"льф"=>"6600",
"льх"=>"6600",
"льц"=>"6600",
"льч"=>"6600",
"льш"=>"6600",
"льщ"=>"6600",
"мб"=>"600",
"мбль"=>"66600",
"мбр"=>"6600",
"мг"=>"600",
"мж"=>"600",
"мк"=>"600",
"мл"=>"600",
"мль"=>"6600",
"мм"=>"600",
"мн"=>"600",
"мп"=>"600",
"мр"=>"600",
"мс"=>"600",
"мств"=>"66600",
"мсь"=>"6600",
"мськ"=>"66600",
"мт"=>"600",
"мф"=>"600",
"мх"=>"600",
"мш"=>"600",
"нв"=>"600",
"нг"=>"600",
"нгл"=>"6600",
"нгль"=>"66600",
"нгр"=>"6600",
"нгс"=>"6600",
"нд"=>"600",
"ндж"=>"6600",
"ндз"=>"6600",
"ндп"=>"6600",
"ндр"=>"6600",
"нж"=>"600",
"нз"=>"600",
"нк"=>"600",
"нкс"=>"6600",
"нкт"=>"6600",
"нм"=>"600",
"нн"=>"600",
"нр"=>"600",
"нс"=>"600",
"нск"=>"6600",
"нст"=>"6600",
"нств"=>"66600",
"нстр"=>"66600",
"нськ"=>"66600",
"нськй"=>"666000",
"нт"=>"600",
"нтк"=>"6600",
"нтр"=>"6600",
"нтств"=>"666000",
"нть"=>"6600",
"нф"=>"600",
"нх"=>"600",
"нц"=>"600",
"нць"=>"6600",
"нч"=>"600",
"нш"=>"600",
"нь"=>"600",
"ньб"=>"6600",
"ньг"=>"6600",
"ньк"=>"6600",
"ньсь"=>"66600",
"пд"=>"600",
"пл"=>"600",
"пр"=>"600",
"пс"=>"600",
"пств"=>"66600",
"псь"=>"6600",
"пт"=>"600",
"птр"=>"6600",
"пф"=>"600",
"пц"=>"600",
"рб"=>"600",
"рв"=>"600",
"рг"=>"600",
"рд"=>"600",
"рдв"=>"6600",
"рдж"=>"6600",
"рдь"=>"6600",
"рж"=>"600",
"рз"=>"600",
"рзн"=>"6600",
"рзь"=>"6600",
"рк"=>"600",
"ркс"=>"6600",
"ркт"=>"6600",
"рл"=>"600",
"рль"=>"6600",
"рльз"=>"66600",
"рм"=>"600",
"рн"=>"600",
"рнс"=>"6600",
"рнст"=>"66600",
"рнь"=>"6600",
"рп"=>"600",
"рр"=>"600",
"рс"=>"600",
"рср"=>"6600",
"рст"=>"6600",
"рств"=>"66600",
"рсть"=>"66600",
"рсь"=>"6600",
"рськ"=>"66600",
"рт"=>"600",
"ртв"=>"6600",
"ртр"=>"6600",
"рть"=>"6600",
"рф"=>"600",
"рх"=>"600",
"рц"=>"600",
"рць"=>"6600",
"рч"=>"600",
"рш"=>"600",
"рщ"=>"600",
"рщсь"=>"66600",
"рь"=>"600",
"сдп"=>"6600",
"сдрп"=>"66600",
"ск"=>"600",
"сл"=>"600",
"сль"=>"6600",
"см"=>"600",
"сн"=>"600",
"сп"=>"600",
"сс"=>"600",
"ст"=>"600",
"ств"=>"6600",
"стй"=>"6600",
"стм"=>"6600",
"стр"=>"6600",
"стрь"=>"66600",
"сть"=>"6600",
"сць"=>"6600",
"сь"=>"600",
"сьб"=>"6600",
"ськ"=>"6600",
"сьм"=>"6600",
"тв"=>"600",
"твт"=>"6600",
"тзт"=>"6600",
"тл"=>"600",
"тль"=>"6600",
"тм"=>"600",
"тмр"=>"6600",
"тр"=>"600",
"тс"=>"600",
"тств"=>"66600",
"тськ"=>"66600",
"тт"=>"600",
"тц"=>"600",
"тч"=>"600",
"ть"=>"600",
"тьсь"=>"66600",
"фм"=>"600",
"фр"=>"600",
"фств"=>"66600",
"фт"=>"600",
"фть"=>"6600",
"фф"=>"600",
"фь"=>"600",
"хв"=>"600",
"хм"=>"600",
"хн"=>"600",
"хр"=>"600",
"хт"=>"600",
"хш"=>"600",
"цтв"=>"6600",
"ць"=>"600",
"цьк"=>"6600",
"чб"=>"600",
"чм"=>"600",
"чн"=>"600",
"чт"=>"600",
"шв"=>"600",
"шль"=>"6600",
"шм"=>"600",
"шн"=>"600",
"шнл"=>"6600",
"шсь"=>"6600",
"шт"=>"600",
"штв"=>"6600",
"щсь"=>"6600",
"йму"=>"3400",
"розора"=>"0054000",
"розори"=>"0065400"
),
'all'=>array(
"а"=>"21",
"аа"=>"030",
"ае"=>"030",
"аі"=>"030",
"ао"=>"030",
"ау"=>"030",
"аю"=>"030",
"ая"=>"030",
"ає"=>"030",
"аї"=>"030",
"е"=>"21",
"еа"=>"030",
"ее"=>"030",
"еі"=>"030",
"ео"=>"030",
"еу"=>"030",
"ею"=>"030",
"ея"=>"030",
"еє"=>"030",
"еї"=>"030",
"и"=>"21",
"иа"=>"030",
"ие"=>"030",
"иі"=>"030",
"ио"=>"030",
"иу"=>"030",
"ию"=>"030",
"ия"=>"030",
"иє"=>"030",
"иї"=>"030",
"і"=>"21",
"іа"=>"030",
"іе"=>"030",
"іи"=>"030",
"іо"=>"030",
"іу"=>"030",
"ію"=>"030",
"ія"=>"030",
"іє"=>"030",
"ії"=>"030",
"о"=>"21",
"оа"=>"030",
"ое"=>"030",
"оі"=>"030",
"оо"=>"030",
"оу"=>"030",
"ою"=>"030",
"оя"=>"030",
"оє"=>"030",
"ої"=>"030",
"у"=>"21",
"уа"=>"030",
"уе"=>"030",
"уі"=>"030",
"уо"=>"030",
"уу"=>"030",
"ую"=>"030",
"уя"=>"030",
"ує"=>"030",
"уї"=>"030",
"ю"=>"21",
"юа"=>"030",
"юе"=>"030",
"юі"=>"030",
"юо"=>"030",
"юу"=>"030",
"юю"=>"030",
"юя"=>"030",
"ює"=>"030",
"юї"=>"030",
"я"=>"21",
"яа"=>"030",
"яе"=>"030",
"яо"=>"030",
"яу"=>"030",
"яю"=>"030",
"яя"=>"030",
"яє"=>"030",
"яї"=>"030",
"є"=>"21",
"єу"=>"030",
"єю"=>"030",
"єє"=>"030",
"єї"=>"030",
"ї"=>"21",
"їе"=>"030",
"їо"=>"030",
"їю"=>"030",
"бк"=>"210",
"бп"=>"210",
"бс"=>"210",
"бт"=>"210",
"бф"=>"210",
"бх"=>"210",
"бц"=>"210",
"бч"=>"210",
"бш"=>"210",
"бщ"=>"210",
"вб"=>"210",
"вг"=>"210",
"вд"=>"210",
"вж"=>"210",
"вз"=>"210",
"вк"=>"210",
"вл"=>"210",
"вм"=>"210",
"вн"=>"210",
"вп"=>"210",
"вр"=>"210",
"вс"=>"210",
"вт"=>"210",
"вф"=>"210",
"вх"=>"210",
"вц"=>"210",
"вч"=>"210",
"вш"=>"210",
"вщ"=>"210",
"вй"=>"210",
"в'"=>"203",
"гк"=>"210",
"гп"=>"210",
"гс"=>"210",
"гт"=>"210",
"гф"=>"210",
"гц"=>"210",
"гч"=>"210",
"гш"=>"210",
"дк"=>"210",
"дп"=>"210",
"дс"=>"210",
"дт"=>"210",
"дф"=>"210",
"дх"=>"210",
"дц"=>"210",
"дч"=>"210",
"дш"=>"210",
"дщ"=>"210",
"жк"=>"210",
"жп"=>"210",
"жс"=>"210",
"жт"=>"210",
"жф"=>"210",
"жх"=>"210",
"жц"=>"210",
"жч"=>"210",
"жш"=>"210",
"зк"=>"210",
"зп"=>"210",
"зс"=>"210",
"зт"=>"210",
"зф"=>"210",
"зх"=>"210",
"зц"=>"210",
"зч"=>"210",
"зш"=>"210",
"зщ"=>"210",
"кб"=>"210",
"кг"=>"210",
"кд"=>"210",
"кз"=>"210",
"лб"=>"210",
"лв"=>"210",
"лг"=>"210",
"лґ"=>"210",
"лд"=>"210",
"лж"=>"210",
"лз"=>"210",
"лк"=>"210",
"лм"=>"210",
"лн"=>"210",
"лп"=>"210",
"лр"=>"210",
"лс"=>"210",
"лт"=>"210",
"лф"=>"210",
"лх"=>"210",
"лц"=>"210",
"лч"=>"210",
"мб"=>"210",
"мв"=>"210",
"мг"=>"210",
"мд"=>"210",
"мж"=>"210",
"мз"=>"210",
"мк"=>"210",
"мл"=>"210",
"мн"=>"210",
"мп"=>"210",
"мр"=>"210",
"мс"=>"210",
"мт"=>"210",
"мф"=>"210",
"мх"=>"210",
"мц"=>"210",
"мч"=>"210",
"мш"=>"210",
"мщ"=>"210",
"м'"=>"203",
"нб"=>"210",
"нв"=>"210",
"нг"=>"210",
"нд"=>"210",
"нж"=>"210",
"нз"=>"210",
"нк"=>"210",
"нл"=>"210",
"нм"=>"210",
"нп"=>"210",
"нр"=>"210",
"нс"=>"210",
"нт"=>"210",
"нф"=>"210",
"нх"=>"210",
"нц"=>"210",
"нч"=>"210",
"нш"=>"210",
"нщ"=>"210",
"н'"=>"203",
"пб"=>"210",
"пд"=>"210",
"пз"=>"210",
"рб"=>"210",
"рв"=>"210",
"рг"=>"210",
"рґ"=>"210",
"рд"=>"210",
"рж"=>"210",
"рз"=>"210",
"рк"=>"210",
"рл"=>"210",
"рм"=>"210",
"рн"=>"210",
"рп"=>"210",
"рс"=>"210",
"рт"=>"210",
"рф"=>"210",
"рх"=>"210",
"рц"=>"210",
"рч"=>"210",
"рш"=>"210",
"рщ"=>"210",
"рй"=>"210",
"р'"=>"203",
"сб"=>"210",
"сг"=>"210",
"сд"=>"210",
"тб"=>"210",
"тг"=>"210",
"тд"=>"210",
"тж"=>"210",
"тз"=>"210",
"фб"=>"210",
"фг"=>"210",
"фз"=>"210",
"хг"=>"210",
"хд"=>"210",
"цб"=>"210",
"цг"=>"210",
"цд"=>"210",
"цз"=>"210",
"чб"=>"210",
"чд"=>"210",
"чж"=>"210",
"шб"=>"210",
"шг"=>"210",
"йб"=>"210",
"йв"=>"210",
"йг"=>"210",
"йд"=>"210",
"йж"=>"210",
"йз"=>"210",
"йк"=>"210",
"йл"=>"210",
"йм"=>"210",
"йн"=>"210",
"йп"=>"210",
"йр"=>"210",
"йс"=>"210",
"йт"=>"210",
"йф"=>"210",
"йх"=>"210",
"йц"=>"210",
"йч"=>"210",
"йш"=>"210",
"йщ"=>"210",
"дьк"=>"2010",
"дьс"=>"2010",
"дьт"=>"2010",
"дьц"=>"2010",
"зьк"=>"2010",
"зьс"=>"2010",
"зьт"=>"2010",
"льб"=>"2010",
"льв"=>"2010",
"льг"=>"2010",
"льд"=>"2010",
"льж"=>"2010",
"льз"=>"2010",
"льк"=>"2010",
"льм"=>"2010",
"льн"=>"2010",
"льп"=>"2010",
"льр"=>"2010",
"льс"=>"2010",
"льт"=>"2010",
"льф"=>"2010",
"льх"=>"2010",
"льц"=>"2010",
"льч"=>"2010",
"льш"=>"2010",
"льщ"=>"2010",
"льй"=>"2010",
"ньб"=>"2010",
"ньг"=>"2010",
"ньз"=>"2010",
"ньк"=>"2010",
"ньл"=>"2010",
"ньм"=>"2010",
"ньс"=>"2010",
"ньт"=>"2010",
"ньх"=>"2010",
"ньц"=>"2010",
"ньч"=>"2010",
"ньш"=>"2010",
"ньй"=>"2010",
"рьк"=>"2010",
"рьц"=>"2010",
"сьб"=>"2010",
"сьд"=>"2010",
"тьб"=>"2010",
"ксп"=>"2100",
"кст"=>"2100",
"кськ"=>"21000",
"псп"=>"2100",
"пст"=>"2100",
"пськ"=>"21000",
"спк"=>"2100",
"спп"=>"2100",
"спс"=>"2100",
"спт"=>"2100",
"спх"=>"2100",
"спч"=>"2100",
"сськ"=>"21000",
"стк"=>"2100",
"стп"=>"2100",
"стс"=>"2100",
"стсь"=>"21000",
"стт"=>"2100",
"стф"=>"2100",
"стц"=>"2100",
"сшт"=>"2100",
"ськк"=>"20100",
"ськс"=>"20100",
"ськт"=>"20100",
"тск"=>"2100",
"тсп"=>"2100",
"тст"=>"2100",
"тськ"=>"21000",
"тшк"=>"2100",
"фсп"=>"2100",
"фст"=>"2100",
"фськ"=>"21000",
"фшт"=>"2100",
"хст"=>"2100",
"хськ"=>"21000",
"цст"=>"2100",
"цшк"=>"2100",
"штк"=>"2100",
"штсь"=>"21000",
"бб"=>"210",
"вв"=>"210",
"гг"=>"210",
"ґґ"=>"210",
"дд"=>"210",
"жж"=>"210",
"зз"=>"210",
"кк"=>"210",
"лл"=>"210",
"мм"=>"210",
"нн"=>"210",
"пп"=>"210",
"рр"=>"210",
"сс"=>"210",
"тт"=>"210",
"фф"=>"210",
"хх"=>"210",
"цц"=>"210",
"чч"=>"210",
"шш"=>"210",
"щщ"=>"210",
"йй"=>"210",
"ння"=>"3000",
"ття"=>"3000",
"ттю"=>"3000",
"лля"=>"3000",
"ллє"=>"3000",
"ллю"=>"3000",
"ддя"=>"3000",
"дж"=>"040",
"дз"=>"040",
"ай"=>"020",
"ей"=>"020",
"ий"=>"020",
"ій"=>"020",
"ой"=>"020",
"уй"=>"020",
"юй"=>"020",
"яй"=>"020",
"єй"=>"020",
"їй"=>"020",
"йо"=>"360",
"ьо"=>"060",
"'"=>"60",
"ь"=>"60",
"виї"=>"0004",
"відуч"=>"000040",
"безвід"=>"0000043",
"овід"=>"00043",
"дієвід"=>"0040043",
"заввід"=>"0040043",
"невід'"=>"0000403",
"невід"=>"000043",
"профвід"=>"00043043",
"спецвід"=>"00043043",
"співвід"=>"00000043",
"техвід"=>"0043043",
"пре"=>"3400",
"при"=>"3400",
"приї"=>"00004",
"про"=>"3400",
"прі"=>"3400",
"розйом"=>"0054000",
"ооб"=>"0040",
"ооб'"=>"00003",
"ообм"=>"00030",
"ообро"=>"000300",
"об'"=>"0003",
"од'"=>"0003",
"над'"=>"00403",
"заор"=>"00540",
"доор"=>"00540",
"поор"=>"00540",
"переор"=>"0000540",
"підор"=>"006540",
"безідей"=>"00454000",
"дов'є"=>"003040",
"зав'є"=>"003040",
"зів'є"=>"003040",
"обів'є"=>"0003040",
"пов'є"=>"003040",
"уів'є"=>"003040",
"зв'я"=>"03040",
"пов'я"=>"003040",
"відв'я"=>"0003040",
"зав'я"=>"003040",
"зів'я"=>"003040",
"заюш"=>"00340",
"нав'я"=>"003040",
"непов'я"=>"00003040",
"обв'я"=>"003040",
"прив'я"=>"0003040",
"підв'я"=>"0003040",
"ув'я"=>"03040",
"зм'я"=>"03040",
"зім'я"=>"003040",
"ум'я"=>"03040",
"вм'я"=>"03040",
"ном'я"=>"003040",
"зам'я"=>"003040",
"нам'я"=>"003040",
"обм'я"=>"003040",
"перем'я"=>"00003040",
"пом'я"=>"003040",
"прим'я"=>"0003040",
"підім'я"=>"00003040",
"сум'я"=>"003040",
"дов'ю"=>"003040",
"зав'ю"=>"003040",
"зів'ю"=>"003040",
"нав'ю"=>"003040",
"пов'ю"=>"003040",
"уів'ю"=>"003040",
"інтерв'ю"=>"000003040",
"заяло"=>"003400",
"коуроч"=>"0004000",
"зуроч"=>"004000",
"надуроч"=>"00004000",
"позауроч"=>"000004000",
"поуроч"=>"0004000",
"приуроч"=>"00004000",
"найубог"=>"00434000",
"наор"=>"00040",
"приор"=>"000040",
"неук"=>"00040",
"вблаг"=>"344000",
"вклад"=>"344000",
"вплив"=>"344000",
"вправн"=>"3440000",
"вродлив"=>"34400000",
"втрут"=>"344000",
"втруч"=>"344000",
"зброй"=>"344000",
"зброю"=>"344000",
"зброє"=>"344000",
"зв'яз"=>"344000",
"йшл"=>"3440",
"мкне"=>"34400",
"мкну"=>"34400",
"мкні"=>"34400",
"псков"=>"344000",
"склад"=>"344000",
"скле"=>"34400",
"склит"=>"344000",
"скло"=>"34400",
"скрипт"=>"3440000",
"сплав"=>"344000",
"сплат"=>"344000",
"сплач"=>"344000",
"справ"=>"344000",
"спритн"=>"3440000",
"сприят"=>"3440000",
"спромо"=>"3440000",
"створ"=>"344000",
"стражд"=>"3440000",
"страх"=>"344000",
"стриб"=>"344000",
"стриж"=>"344000",
"строй"=>"344000",
"строк"=>"344000",
"стром"=>"344000",
"строф"=>"344000",
"строч"=>"344000",
"строю"=>"344000",
"строя"=>"344000",
"строє"=>"344000",
"строї"=>"344000",
"структ"=>"3440000",
"струкц"=>"3440000",
"стрій"=>"344000",
"стріл"=>"344000",
"стріч"=>"344000",
"ткнен"=>"344000",
"тьмар"=>"344000",
"тьмяні"=>"3440000",
"управ"=>"344000",
"блаж"=>"30000",
"ближ"=>"30000",
"близ"=>"30000",
"блиск"=>"300000",
"блок"=>"30000",
"блоці"=>"300000",
"бран"=>"30000",
"брати"=>"300000",
"брест"=>"300000",
"бризк"=>"300000",
"британ"=>"3000000",
"бруд"=>"30000",
"вбив"=>"34000",
"введен"=>"3400000",
"вдал"=>"34000",
"вдовз"=>"340000",
"вдовол"=>"3400000",
"вживан"=>"3400000",
"влад"=>"34000",
"власн"=>"340000",
"влашт"=>"340000",
"влов"=>"34000",
""=>"",
"впевн"=>"340000",
"впоряд"=>"3400000",
"вразлив"=>"34000000",
"врожай"=>"3400000",
"всюд"=>"34000",
"втіл"=>"34000",
"глад"=>"30000",
"глиб"=>"30000",
"глин"=>"30000",
"глоб"=>"30000",
"глуз"=>"30000",
"глуш"=>"30000",
"гляд"=>"30000",
"глян"=>"30000",
"гнан"=>"30000",
"гнил"=>"30000",
"гноз"=>"30000",
"гнучк"=>"300000",
"грав"=>"30000",
"град"=>"30000",
"грай"=>"30000",
"грам"=>"30000",
"гран"=>"30000",
"грати"=>"300000",
"граф"=>"30000",
"граш"=>"30000",
"граю"=>"30000",
"грає"=>"30000",
"грес"=>"30000",
"грець"=>"300000",
"гроб"=>"30000",
"грож"=>"30000",
"гроз"=>"30000",
"громад"=>"3000000",
"груван"=>"3000000",
"грунт"=>"300000",
"груп"=>"30000",
"грів"=>"30000",
"гріт"=>"30000",
"гріш"=>"30000",
"гідро"=>"340000",
"дан"=>"3400",
"дбав"=>"34000",
"дбал"=>"34000",
"дбан"=>"34000",
"дбат"=>"34000",
"дбає"=>"34000",
"двиг"=>"30000",
"двою"=>"30000",
"двоє"=>"30000",
"двій"=>"30000",
"двір"=>"30000",
"двічі"=>"300000",
"драж"=>"30000",
"дром"=>"30000",
"друж"=>"30000",
"друк"=>"30000",
"дряп"=>"30000",
"дріб"=>"30000",
"дріма"=>"300000",
"жвав"=>"30000",
"жміть"=>"300000",
"жріть"=>"300000",
"збага"=>"340000",
"збаланс"=>"34000000",
"збув"=>"34000",
"збут"=>"34000",
"зваж"=>"30000",
"зван"=>"30000",
"звед"=>"30000",
"звел"=>"30000",
"звест"=>"300000",
"звись"=>"300000",
"звич"=>"30000",
"звищ"=>"30000",
"зворуш"=>"3000000",
"звук"=>"30000",
"звуч"=>"30000",
"звіт"=>"30000",
"згод"=>"34000",
"здат"=>"34000",
"здовж"=>"340000",
"здоров"=>"3400000",
"здійсн"=>"3400000",
"змін"=>"30000",
"зйом"=>"30000",
"зміш"=>"30000",
"знав"=>"30000",
"знай"=>"30000",
"знак"=>"30000",
"знал"=>"30000",
"знан"=>"30000",
"знат"=>"30000",
"знаход"=>"3000000",
"знач"=>"30000",
"знаю"=>"30000",
"знає"=>"30000",
"зниж"=>"30000",
"знім"=>"30000",
"зрозум"=>"3000000",
"зрюв"=>"30000",
"зрів"=>"30000",
"зріл"=>"30000",
"зрін"=>"30000",
"зчеп"=>"34000",
"йма"=>"3400",
"йменн"=>"340000",
"ймищ"=>"34000",
"ймовірн"=>"34000000",
"ймуть"=>"340000",
"йміть"=>"340000",
"йшов"=>"34000",
"множ"=>"34000",
"мріть"=>"340000",
"мщен"=>"34000",
"псов"=>"34000",
"псон"=>"34000",
"псув"=>"34000",
"рвав"=>"34000",
"рвати"=>"340000",
"рвіть"=>"340000",
"скид"=>"34000",
"скок"=>"34000",
"скоп"=>"34000",
"скор"=>"34000",
"скороч"=>"3400000",
"скоч"=>"34000",
"скіль"=>"340000",
"скіпл"=>"340000",
"спад"=>"34000",
"спект"=>"340000",
"сперм"=>"340000",
"спин"=>"34000",
"сповід"=>"3400000",
"спожив"=>"3400000",
"спостер"=>"34000000",
"спі"=>"3400",
"спіть"=>"340000",
"спіш"=>"34000",
"стабіл"=>"3400000",
"став"=>"34000",
"стад"=>"34000",
"стаз"=>"34000",
"стайн"=>"340000",
"стал"=>"34000",
"стан"=>"34000",
"стар"=>"34000",
"стара"=>"340000",
"стат"=>"34000",
"стач"=>"34000",
"стає"=>"34000",
"степ"=>"34000",
"стереж"=>"3400000",
"стеріг"=>"3400000",
"стиг"=>"34000",
"стиж"=>"34000",
"стисл"=>"340000",
"ститу"=>"340000",
"стовб"=>"340000",
"стой"=>"34000",
"сторон"=>"3400000",
"сторін"=>"3400000",
"стосо"=>"340000",
"стосу"=>"340000",
"стою"=>"34000",
"стоян"=>"340000",
"ступ"=>"34000",
"стяг"=>"34000",
"стіб"=>"34000",
"стій"=>"34000",
"стіль"=>"340000",
"стір"=>"34000",
"сфер"=>"34000",
"схил"=>"34000",
"схов"=>"34000",
"схід"=>"34000",
"ткан"=>"34000",
"хто"=>"3400",
"шкод"=>"34000",
"школ"=>"34000",
"шкідл"=>"340000",
"шкіл"=>"34000",
"шкір"=>"34000",
"штаб"=>"34000",
"штуч"=>"34000",
"ґрунт"=>"300000",
"авторит"=>"34000000",
"агент"=>"340000",
"агрес"=>"340000",
"адекват"=>"34000000",
"адитив"=>"3400000",
"азарт"=>"340000",
"актив"=>"340000",
"актуал"=>"3400000",
"акурат"=>"3400000",
"акуст"=>"340000",
"акцепт"=>"3400000",
"акциз"=>"340000",
"алергі"=>"3400000",
"аматор"=>"3400000",
"аналіз"=>"3400000",
"анатом"=>"3400000",
"апарат"=>"3400000",
"апеляц"=>"3400000",
"апостол"=>"34000000",
"аптеч"=>"340000",
"аргумен"=>"34000000",
"аромат"=>"3400000",
"асоці"=>"340000",
"аспект"=>"3400000",
"атлет"=>"340000",
"ахалі"=>"340000",
"еколог"=>"3400000",
"економ"=>"3400000",
"елегант"=>"34000000",
"електр"=>"3400000",
"елемент"=>"34000000",
"емоці"=>"340000",
"емігр"=>"340000",
"енерг"=>"340000",
"естакад"=>"34000000",
"естет"=>"340000",
"етап"=>"34000",
"об'єдн"=>"3400000",
"об'єкт"=>"3400000",
"обереж"=>"3400000",
"обира"=>"340000",
"оборон"=>"3400000",
"обід"=>"34000",
"обіц"=>"34000",
"одаль"=>"340000",
"одяг"=>"34000",
"озбро"=>"340000",
"окрем"=>"340000",
"операт"=>"3400000",
"оплат"=>"340000",
"оптим"=>"340000",
"опуст"=>"340000",
"опуше"=>"340000",
"опуще"=>"340000",
"ординац"=>"34000000",
"оренд"=>"340000",
"особ"=>"34000",
"осяжн"=>"340000",
"охоло"=>"340000",
"охорон"=>"3400000",
"охоч"=>"34000",
"очисн"=>"340000",
"очищ"=>"34000",
"уваг"=>"34000",
"уваж"=>"34000",
"угав"=>"34000",
"узгод"=>"340000",
"уклад"=>"340000",
"укомпл"=>"3400000",
"укрупн"=>"3400000",
"улюблен"=>"34000000",
"умит"=>"34000",
"уміл"=>"34000",
"уперед"=>"3400000",
"уразлив"=>"34000000",
"урбан"=>"340000",
"урочист"=>"34000000",
"уряд"=>"34000",
"урядов"=>"3400000",
"успіш"=>"340000",
"установ"=>"34000000",
"устпіш"=>"3400000",
"усувати"=>"34000000",
"утвор"=>"340000",
"утробн"=>"3400000",
"ядерн"=>"340000",
"язик"=>"34000",
"якіс"=>"34000",
"ярус"=>"34000",
"яскрав"=>"3400000",
"єдн"=>"3430",
"єдин"=>"34000",
"єписк"=>"340000",
"єрей"=>"34000",
"ізотоп"=>"3400000",
"ілюстр"=>"3400000",
"імовір"=>"3400000",
"інтенс"=>"3400000",
"інформ"=>"3400000",
"ініціат"=>"34000000",
"існув"=>"340000",
"їждж"=>"34000",
"їзд"=>"3400",
"їст"=>"3400",
"їхав"=>"34000",
"їхат"=>"34000",
"'їв"=>"0040",
"'їз"=>"0040",
"'їд"=>"0040",
"'їж"=>"0040",
"'їл"=>"0040",
"'їм"=>"0040",
"'їс"=>"0040",
"'їх"=>"0040",
"авіа"=>"00040",
"авоїд"=>"000040",
"аетил"=>"004000",
"альбіон"=>"00000500",
"ахоїд"=>"000040",
"аудіо"=>"000040",
"айсберг"=>"00430000",
"бактеріо"=>"000000040",
"басенер"=>"00430000",
"басантра"=>"004300000",
"бейсбол"=>"00040000",
"бекон"=>"005000",
"б'єть"=>"004000",
"бйорнс"=>"0000400",
"біо"=>"0043",
"богдан"=>"0043000",
"бранд"=>"000040",
"бріджпорт"=>"0004030000",
"безімен"=>"00054000",
"боєгол"=>"0043000",
"боєгот"=>"0043000",
"боєзап"=>"0043000",
"боєздат"=>"00430000",
"боєкомп"=>"00430000",
"боєпост"=>"00430000",
"боєприп"=>"00430000",
"борисп"=>"0000450",
"вантрац"=>"43000000",
"верхн"=>"000430",
"вийд"=>"00340",
"винайд"=>"0000340",
"вийт"=>"00340",
"винайт"=>"0000340",
"відзна"=>"0007000",
"віден"=>"005400",
"відео"=>"005440",
"відом"=>"005400",
"відображ"=>"000540000",
"відобраз"=>"000540000",
"воско"=>"004500",
"водосток"=>"000054000",
"водозбір"=>"000054000",
"вольтметр"=>"0000430000",
"вольтампер"=>"00004300000",
"в'яз"=>"30400",
"гетьман"=>"00203000",
"гео"=>"0040",
"госпроз"=>"00445000",
"гідромет"=>"004505000",
"дзем"=>"47000",
"держатом"=>"000454000",
"держадм"=>"00045400",
"держбюдж"=>"000450000",
"держвид"=>"00045000",
"держдум"=>"00045000",
"держзамов"=>"0004500000",
"держком"=>"00045000",
"держнафт"=>"000450000",
"держреєс"=>"000450000",
"держбез"=>"00043000",
"держрезерв"=>"00043000000",
"держстр"=>"00045000",
"держслуж"=>"000450000",
"двохатом"=>"000045000",
"джентль"=>"00004000",
"дисбаланс"=>"0000000000",
"дисгарм"=>"00430000",
"дисквал"=>"00430000",
"дискомф"=>"00430000",
"дисконт"=>"00430000",
"дискред"=>"00430000",
"дискрет"=>"00430000",
"дискрец"=>"00430000",
"дискрим"=>"00430000",
"дискусі"=>"00430000",
"дискуту"=>"00430000",
"дислок"=>"0043000",
"диспарит"=>"004300000",
"дисперс"=>"00430000",
"диспетч"=>"00430000",
"диспле"=>"0043000",
"дисплей"=>"00430000",
"диспози"=>"00430000",
"диспроп"=>"00430000",
"диспут"=>"0043000",
"дистил"=>"0043000",
"дистриб"=>"00430000",
"дистроф"=>"00430000",
"дисфункц"=>"004300000",
"дійт"=>"00340",
"дійд"=>"00340",
"дніпр"=>"040340",
"доїд"=>"00040",
"доїм"=>"00040",
"доїх"=>"00040",
"доїж"=>"00040",
"доїст"=>"000400",
"дозвол"=>"0034000",
"дозвіл"=>"0034000",
"дороговказ"=>"00000054000",
"еустр"=>"004000",
"еосві"=>"004000",
"енергозбереж"=>"0000003400000",
"енергозберіг"=>"0000003400000",
"екск"=>"00210",
"експ"=>"00210",
"екст"=>"00210",
"ексц"=>"00210",
"євратом"=>"00430000",
"єпіскоп"=>"00045000",
"єпископ"=>"00045000",
"запчаст"=>"00430000",
"заїд"=>"00040",
"заїж"=>"00040",
"заїз"=>"00040",
"заїл"=>"00040",
"заїм"=>"00040",
"заїх"=>"00040",
"зекономити"=>"00400000000",
"з'ясо"=>"304000",
"знайд"=>"000340",
"знайт"=>"000340",
"зока"=>"00400",
"зоке"=>"00400",
"зоки"=>"00400",
"зоку"=>"00400",
"зокі"=>"00400",
"игоїд"=>"000040",
"ийти"=>"00400",
"іетил"=>"004000",
"ілетил"=>"0434000",
"ійти"=>"00400",
"інформаген"=>"00000430000",
"йосві"=>"004000",
"казахстан"=>"0000430000",
"квоїд"=>"000040",
"короїд"=>"0000040",
"квартплат"=>"0000430000",
"київенер"=>"000400000",
"контрре"=>"00040000",
"контрарг"=>"000403000",
"жкоматом"=>"000454000",
"комуненерг"=>"00004000000",
"мінеко"=>"0045400",
"міненер"=>"00454000",
"мокрий"=>"0045000",
"м'якш"=>"304000",
"м'ят"=>"30400",
"наблиз"=>"0034000",
"навряд"=>"0034000",
"навча"=>"003400",
"назв"=>"00340",
"надзв"=>"004740",
"наївс"=>"000400",
"наївш"=>"000400",
"наїж"=>"00040",
"наїз"=>"00040",
"наїл"=>"00040",
"наїм"=>"00040",
"наїс"=>"00040",
"наїх"=>"00040",
"найа"=>"00430",
"найе"=>"00430",
"найобереж"=>"0043000000",
"найобер"=>"00474000",
"найогид"=>"00474000",
"найогол"=>"00474000",
"найогряд"=>"004740000",
"найопук"=>"00474000",
"найохай"=>"00474000",
"наймасл"=>"00430000",
"найспри"=>"00430000",
"найякіс"=>"00430000",
"навчен"=>"0034000",
"навчіть"=>"00340000",
"невтом"=>"0034000",
"недбан"=>"0034000",
"надбан"=>"0034000",
"незвич"=>"0034000",
"незваж"=>"0034000",
"неопал"=>"0004000",
"недої"=>"000004",
"неїст"=>"000400",
"наплив"=>"0054000",
"нітрат"=>"0045000",
"оноїд"=>"000040",
"оопал"=>"004000",
"еопал"=>"004000",
"обідран"=>"00034000",
"обійд"=>"000340",
"обійт"=>"000340",
"обумов"=>"0054000",
"онаїд"=>"000040",
"оосві"=>"004000",
"оок"=>"0040",
"оустр"=>"004000",
"оатом"=>"004000",
"облдерж"=>"00400040",
"обладмін"=>"004340000",
"переїд"=>"0000040",
"переїж"=>"0000040",
"переїз"=>"0000040",
"переїл"=>"0000040",
"переїс"=>"0000040",
"переїх"=>"0000040",
"переплив"=>"000054000",
"перейд"=>"0000340",
"прейс"=>"000440",
"перейт"=>"0000340",
"перегній"=>"000004000",
"передобід"=>"0000054000",
"перевтом"=>"000034000",
"передсм"=>"00004500",
"передумов"=>"0000054000",
"підодин"=>"00054000",
"півостр"=>"00054400",
"півень"=>"0054000",
"поблизу"=>"00340000",
"повтор"=>"0034000",
"почне"=>"000400",
"почни"=>"000400",
"почну"=>"000400",
"появ"=>"00040",
"повчен"=>"0034000",
"повчіть"=>"00340000",
"подроб"=>"0034000",
"подраз"=>"0034000",
"подво"=>"003400",
"пожніть"=>"00540000",
"позбав"=>"0054000",
"поїд"=>"00040",
"прої"=>"00004",
"поїзд"=>"000400",
"пострадян"=>"0044500000",
"посткому"=>"004450000",
"постдекр"=>"004430000",
"постконтра"=>"00443000000",
"постменопауз"=>"0044300000000",
"постприват"=>"00440000000",
"постраді"=>"004430000",
"постсоці"=>"004450000",
"посткап"=>"00043000",
"постком"=>"00043000",
"постнат"=>"00043000",
"постпроц"=>"000430000",
"постсоц"=>"00043000",
"постфікс"=>"000430000",
"прийт"=>"000340",
"простирад"=>"0003400000",
"профс"=>"000430",
"політекон"=>"0000450000",
"портн"=>"000430",
"портрет"=>"00043000",
"портфел"=>"00043000",
"прийд"=>"000340",
"принцип"=>"00040000",
"проектн"=>"00040030",
"проблем"=>"00034000",
"проммай"=>"00043000",
"проплат"=>"00450000",
"радіо"=>"000040",
"райвно"=>"0003400",
"роздво"=>"0045400",
"розмінний"=>"0045000000",
"розучен"=>"00054000",
"розімен"=>"00054000",
"розвант"=>"00050000",
"розвин"=>"0005000",
"розвит"=>"0005000",
"розділ"=>"0045000",
"розгор"=>"0045000",
"розвер"=>"0045000",
"розчеп"=>"0045000",
"роз'єдн"=>"00405000",
"з'єдн"=>"004000",
"рукостиск"=>"0000540000",
"розум"=>"005400",
"розгром"=>"00430000",
"розлив"=>"0043000",
"рмоїд"=>"000040",
"санкт"=>"000443",
"сеїд"=>"00040",
"серцеїд"=>"00000040",
"спецкур"=>"00043000",
"спецмон"=>"00043000",
"спецпр"=>"0004000",
"спецс"=>"000430",
"спортвир"=>"000043000",
"спортзал"=>"000043000",
"спортком"=>"000043000",
"спортклуб"=>"0000430000",
"спортмай"=>"000043000",
"спортсме"=>"000044300",
"сортн"=>"000400",
"спромож"=>"34000000",
"ськвуг"=>"0040000",
"статупр"=>"00005000",
"торгпред"=>"000430000",
"транс"=>"000043",
"туркмен"=>"00043000",
"цукро"=>"000300",
"укр"=>"0440",
"укравт"=>"0003400",
"украгр"=>"0003400",
"укрекс"=>"0003400",
"укрінбанк"=>"0003440000",
"убоїд"=>"000040",
"чорнобрив"=>"0000034000",
"центренерг"=>"00044300000",
"ясоїд"=>"000040",
"виуч"=>"00340",
"зауч"=>"00340",
"науч"=>"00340",
"недоуч"=>"0000340",
"неуч"=>"00340",
"підуч"=>"000340",
"педучи"=>"0003400",
"переуч"=>"0000340",
"самоуч"=>"0000340",
"вияв"=>"00040",
"з'яв"=>"00040",
"заяв"=>"00040",
"наяв"=>"00040",
"уяв"=>"0040",
"воєвод"=>"0040000",
"воєнач"=>"0040000",
"своєчас"=>"00040000",
"своєкорис"=>"0004000000",
"своєрід"=>"00040000",
"хвоєгриз"=>"000434000",
"геліо"=>"000040",
"діо"=>"0040",
"етіо"=>"00040",
"міо"=>"0040",
"іон"=>"0400",
"поліо"=>"000040",
"соціо"=>"000040",
"фізіо"=>"000040",
"хіміо"=>"000040",
"гомео"=>"000040",
"діалог"=>"0040000",
"діоген"=>"0040000",
"деяк"=>"00040",
"оодинок"=>"00400000",
"аопік"=>"004000",
"аоха"=>"00400",
"еоха"=>"00400",
"зоо"=>"0060",
"канал"=>"005000",
"оізол"=>"004000",
"міжусоб"=>"00004000",
"метео"=>"000040",
"абияк"=>"000040",
"ніяк"=>"00040",
"виясн"=>"000400",
"найясн"=>"0003400",
"неясн"=>"000400",
"поясн"=>"000400",
"проясн"=>"0000400",
"роз'ясн"=>"00000400",
"розорам"=>"00545000",
"розорах"=>"00540000",
"розори"=>"0054000",
"розоро"=>"0054000",
"розору"=>"0054000",
"розоря"=>"0054000",
"розорю"=>"0054000",
"розорі"=>"0054000",
"розора"=>"0000400",
"розоре"=>"0000400",
"розореш"=>"00004000",
"розорн"=>"0000400",
"напоум"=>"0000040",
"неаби"=>"000400",
"еоцін"=>"004000",
"ооцін"=>"004000",
"доук"=>"00040",
"доум"=>"00040",
"еобур"=>"004000",
"еоголош"=>"00400000",
"еозор"=>"004000",
"бальнео"=>"00000040",
"неоліт"=>"0040000",
"неомальт"=>"004000000",
"неоклас"=>"00400000",
"неокомун"=>"004000000",
"неоландш"=>"004000000",
"неолог"=>"0040000",
"неолібер"=>"004000000",
"неонац"=>"0040000",
"неофіт"=>"0040000",
"неюн"=>"00040",
"неяк"=>"00040",
"неярок"=>"0004000",
"нокаут"=>"0043400",
"півоні"=>"0054000",
"півос"=>"000040",
"палео"=>"000040",
"панотець"=>"004340000",
"дусім"=>"034000",
"побере"=>"0450000",
"аохот"=>"004000",
"оеко"=>"00400",
"еохот"=>"004000",
"еощад"=>"004000",
"аощад"=>"004000",
"оочищ"=>"004000",
"пояс"=>"00040",
"роз'яр"=>"0000040",
"теодоліт"=>"004000000",
"теолог"=>"0040000",
"теософ"=>"0040000",
"ообіг"=>"004000",
"оусун"=>"004000",
"оуком"=>"004000",
"півовал"=>"00034000",
"аудар"=>"034000",
"оудар"=>"034000",
"зудар"=>"034000",
"вудар"=>"034000",
"контрудар"=>"0000034000",
"оокисл"=>"0340000",
"иокисл"=>"0340000",
"еньокисл"=>"000740000",
"еокисл"=>"0340000",
"хокисл"=>"0340000",
"иістор"=>"0340000",
"оістор"=>"0340000",
"іістор"=>"0340000",
"аістор"=>"0340000",
"яістор"=>"0340000",
"еістор"=>"0340000",
"надістор"=>"000040000",
"найістор"=>"000340000",
"півістор"=>"000340000",
"передістор"=>"00000340000",
"постістор"=>"0000340000",
"артафіш"=>"00430000",
"артвзвод"=>"004300000",
"артдесант"=>"0043000000",
"арткафе"=>"00430000",
"артмайс"=>"00430000",
"артмедіа"=>"004300000",
"артмейс"=>"00430000",
"артмін"=>"0043000",
"артобстр"=>"004340000",
"артодин"=>"00434000",
"артозбр"=>"00434000",
"артпід"=>"0043000",
"артрин"=>"0043000",
"артустан"=>"004340000",
"артфакт"=>"00430000",
"артхім"=>"0043000",
"артцентр"=>"004300000",
"надістот"=>"000040000",
"найістот"=>"000040000",
"еістот"=>"0040000",
"оістот"=>"0040000",
"аутекол"=>"00430000",
"оочист"=>"0040000",
"закт"=>"03400",
"оакт"=>"00400",
"еакт"=>"00400",
"гіперакт"=>"000003400",
"найакт"=>"0000400",
"півакт"=>"0000400",
"аобраз"=>"0040000",
"еобраз"=>"0040000",
"ообраз"=>"0040000",
"графобраз"=>"0000340000",
"найобраз"=>"000340000",
"суперобраз"=>"00000340000",
"артмейст"=>"004300000",
"багермейст"=>"00004300000",
"балетмейст"=>"00004300000",
"брандмейст"=>"00004300000",
"вальдмейст"=>"00404300000",
"вельтмейст"=>"00404300000",
"гофмейст"=>"004300000",
"гросмейст"=>"0004300000",
"декретмейст"=>"000004300000",
"докмейст"=>"004300000",
"капельмейст"=>"000040300000",
"квартирмейст"=>"0000004300000",
"концертмейст"=>"0000044300000",
"кранмейст"=>"0004300000",
"поліцмейст"=>"00004300000",
"поштмейст"=>"0044300000",
"форстмейст"=>"00444300000",
"хормейст"=>"004300000",
"шапітмейст"=>"00004300000",
"шталмейст"=>"0004300000",
"єгермейст"=>"0004300000",
"иаварі"=>"0040000",
"яаварі"=>"0040000",
"оаварі"=>"0040000",
"еаварі"=>"0040000",
"безаварі"=>"000040000",
"міжаварі"=>"000340000",
"надаварі"=>"000340000",
"поставарі"=>"0000340000",
"напіваварі"=>"00000340000",
"передаварі"=>"00000340000",
"супераварі"=>"00000340000",
"аадрес"=>"0040000",
"еадрес"=>"0040000",
"оадрес"=>"0040000",
"іадрес"=>"0040000",
"безадрес"=>"000340000",
"аефект"=>"0040000",
"еефект"=>"0040000",
"оефект"=>"0040000",
"найефект"=>"000340000",
"суперефект"=>"00000340000",
"оемісі"=>"0040000",
"иемісі"=>"0040000",
"яемісі"=>"0040000",
"еемісі"=>"0040000",
"беземісі"=>"000040000",
"гіперемісі"=>"00000340000",
"еубог"=>"004000",
"йубог"=>"034000",
"ийня"=>"00400",
"зайня"=>"000400",
"здійня"=>"0000400",
"найня"=>"000400",
"обійня"=>"0000400",
"перейня"=>"00000400",
"підійня"=>"00000400",
"прийм"=>"000040",
"пійм"=>"00040",
"дійма"=>"000400",
"вийм"=>"00040",
"найма"=>"000400",
"займ"=>"00040",
"дойм"=>"04340",
"обойм"=>"000040",
"пройм"=>"000040",
"обійм"=>"000040",
"перейм"=>"0000040",
"безугл"=>"0000400",
"безупин"=>"00004000",
"блокпост"=>"000430000",
"оаналіз"=>"03400000",
"баканаліз"=>"0003400000",
"цаналіз"=>"03400000",
"генаналіз"=>"0003400000",
"заналіз"=>"03400000",
"маналіз"=>"03400000",
"нтаналіз"=>"003400000",
"міжаналіз"=>"0003400000",
"поліаналіз"=>"00003400000",
"реаналіз"=>"003400000",
"оугод"=>"004000",
"аугод"=>"004000",
"еугод"=>"004000",
"півугод"=>"00034000",
"розугод"=>"00034000",
"госпугод"=>"000434000",
"еопис"=>"004000",
"оопис"=>"004000",
"аопис"=>"004000",
"бортмех"=>"00443000",
"бортопер"=>"004434000",
"бортпро"=>"00443000",
"бортрад"=>"00443000",
"бортінж"=>"00443400",
"оакаці"=>"0040000",
"оус"=>"0040",
"оодерж"=>"0040000",
"оана"=>"00400",
"бібліо"=>"0000040",
"анавч"=>"000340",
"енавч"=>"000340",
"монавч"=>"0000340",
"жонавч"=>"0000340",
"іонавч"=>"0000340",
"овивч"=>"000340",
"евивч"=>"000340",
"едовч"=>"000340",
"озавч"=>"000340",
"повча"=>"003400",
"емрій"=>"034000",
"востаннє"=>"004000000",
"найостанн"=>"0003400000",
"передостанн"=>"000003400000",
"иестет"=>"0040000",
"оестет"=>"0040000",
"еестет"=>"0040000",
"йестет"=>"0340000",
"панестет"=>"000340000",
"парестет"=>"000340000",
"ооктан"=>"0040000",
"іоктан"=>"0040000",
"ооплачув"=>"004000000",
"еоплачув"=>"004000000",
"передопла"=>"0000034000",
"виуди"=>"000400",
"овказ"=>"034000",
"евказ"=>"034000"
)
);
?>