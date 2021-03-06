@extends('layout')

@section('customcss')
	<style type="text/css">
		.the-icons li { padding: 16px 0!important }
		.the-icons .i-code { display:none }
	</style>
@stop

@section('pagetitle')
    New Icons
@stop

@section('actions')
@stop

@section('content')
	<div id="icons" class="wrapper">
		<h1>New Icons</h1>
		<div class="row">
			<div class="xlarge-3 large-3 medium-4 small-6 xsmall-12">
				<ul class="the-icons plain">
					<li title="Code: 0x266a"><i class="xn-note"></i> <span class="i-name">xn-note</span><span class="i-code">0x266a</span></li>
					<li title="Code: 0x266b"><i class="xn-note-beamed"></i> <span class="i-name">xn-note-beamed</span><span class="i-code">0x266b</span></li>
					<li title="Code: 0x1f3b5"><i class="xn-music"></i> <span class="i-name">xn-music</span><span class="i-code">0x1f3b5</span></li>
					<li title="Code: 0x1f50d"><i class="xn-search"></i> <span class="i-name">xn-search</span><span class="i-code">0x1f50d</span></li>
					<li title="Code: 0x1f526"><i class="xn-flashlight"></i> <span class="i-name">xn-flashlight</span><span class="i-code">0x1f526</span></li>
					<li title="Code: 0x2709"><i class="xn-mail"></i> <span class="i-name">xn-mail</span><span class="i-code">0x2709</span></li>
					<li title="Code: 0x2665"><i class="xn-heart"></i> <span class="i-name">xn-heart</span><span class="i-code">0x2665</span></li>
					<li title="Code: 0x2661"><i class="xn-heart-empty"></i> <span class="i-name">xn-heart-empty</span><span class="i-code">0x2661</span></li>
					<li title="Code: 0x2605"><i class="xn-star"></i> <span class="i-name">xn-star</span><span class="i-code">0x2605</span></li>
					<li title="Code: 0x2606"><i class="xn-star-empty"></i> <span class="i-name">xn-star-empty</span><span class="i-code">0x2606</span></li>
					<li title="Code: 0x1f464"><i class="xn-user"></i> <span class="i-name">xn-user</span><span class="i-code">0x1f464</span></li>
					<li title="Code: 0x1f465"><i class="xn-users"></i> <span class="i-name">xn-users</span><span class="i-code">0x1f465</span></li>
					<li title="Code: 0xe700"><i class="xn-user-add"></i> <span class="i-name">xn-user-add</span><span class="i-code">0xe700</span></li>
					<li title="Code: 0x1f3ac"><i class="xn-video"></i> <span class="i-name">xn-video</span><span class="i-code">0x1f3ac</span></li>
					<li title="Code: 0x1f304"><i class="xn-picture"></i> <span class="i-name">xn-picture</span><span class="i-code">0x1f304</span></li>
					<li title="Code: 0x1f4f7"><i class="xn-camera"></i> <span class="i-name">xn-camera</span><span class="i-code">0x1f4f7</span></li>
					<li title="Code: 0x268f"><i class="xn-layout"></i> <span class="i-name">xn-layout</span><span class="i-code">0x268f</span></li>
					<li title="Code: 0x2630"><i class="xn-menu"></i> <span class="i-name">xn-menu</span><span class="i-code">0x2630</span></li>
					<li title="Code: 0x2713"><i class="xn-check"></i> <span class="i-name">xn-check</span><span class="i-code">0x2713</span></li>
					<li title="Code: 0x2715"><i class="xn-cancel"></i> <span class="i-name">xn-cancel</span><span class="i-code">0x2715</span></li>
					<li title="Code: 0x2716"><i class="xn-cancel-circled"></i> <span class="i-name">xn-cancel-circled</span><span class="i-code">0x2716</span></li>
					<li title="Code: 0x274e"><i class="xn-cancel-squared"></i> <span class="i-name">xn-cancel-squared</span><span class="i-code">0x274e</span></li>
					<li title="Code: 0x2b"><i class="xn-plus"></i> <span class="i-name">xn-plus</span><span class="i-code">0x2b</span></li>
					<li title="Code: 0x2795"><i class="xn-plus-circled"></i> <span class="i-name">xn-plus-circled</span><span class="i-code">0x2795</span></li>
					<li title="Code: 0x229e"><i class="xn-plus-squared"></i> <span class="i-name">xn-plus-squared</span><span class="i-code">0x229e</span></li>
					<li title="Code: 0x2d"><i class="xn-minus"></i> <span class="i-name">xn-minus</span><span class="i-code">0x2d</span></li>
					<li title="Code: 0x2796"><i class="xn-minus-circled"></i> <span class="i-name">xn-minus-circled</span><span class="i-code">0x2796</span></li>
					<li title="Code: 0x229f"><i class="xn-minus-squared"></i> <span class="i-name">xn-minus-squared</span><span class="i-code">0x229f</span></li>
					<li title="Code: 0x2753"><i class="xn-help"></i> <span class="i-name">xn-help</span><span class="i-code">0x2753</span></li>
					<li title="Code: 0xe704"><i class="xn-help-circled"></i> <span class="i-name">xn-help-circled</span><span class="i-code">0xe704</span></li>
					<li title="Code: 0x2139"><i class="xn-info"></i> <span class="i-name">xn-info</span><span class="i-code">0x2139</span></li>
					<li title="Code: 0xe705"><i class="xn-info-circled"></i> <span class="i-name">xn-info-circled</span><span class="i-code">0xe705</span></li>
					<li title="Code: 0x1f519"><i class="xn-back"></i> <span class="i-name">xn-back</span><span class="i-code">0x1f519</span></li>
					<li title="Code: 0x2302"><i class="xn-home"></i> <span class="i-name">xn-home</span><span class="i-code">0x2302</span></li>
					<li title="Code: 0x1f517"><i class="xn-link"></i> <span class="i-name">xn-link</span><span class="i-code">0x1f517</span></li>
					<li title="Code: 0x1f4ce"><i class="xn-attach"></i> <span class="i-name">xn-attach</span><span class="i-code">0x1f4ce</span></li>
					<li title="Code: 0x1f512"><i class="xn-lock"></i> <span class="i-name">xn-lock</span><span class="i-code">0x1f512</span></li>
					<li title="Code: 0x1f513"><i class="xn-lock-open"></i> <span class="i-name">xn-lock-open</span><span class="i-code">0x1f513</span></li>
					<li title="Code: 0xe70a"><i class="xn-eye"></i> <span class="i-name">xn-eye</span><span class="i-code">0xe70a</span></li>
					<li title="Code: 0xe70c"><i class="xn-tag"></i> <span class="i-name">xn-tag</span><span class="i-code">0xe70c</span></li>
					<li title="Code: 0x1f516"><i class="xn-bookmark"></i> <span class="i-name">xn-bookmark</span><span class="i-code">0x1f516</span></li>
					<li title="Code: 0x1f4d1"><i class="xn-bookmarks"></i> <span class="i-name">xn-bookmarks</span><span class="i-code">0x1f4d1</span></li>
					<li title="Code: 0x2691"><i class="xn-flag"></i> <span class="i-name">xn-flag</span><span class="i-code">0x2691</span></li>
					<li title="Code: 0x1f44d"><i class="xn-thumbs-up"></i> <span class="i-name">xn-thumbs-up</span><span class="i-code">0x1f44d</span></li>
					<li title="Code: 0x1f44e"><i class="xn-thumbs-down"></i> <span class="i-name">xn-thumbs-down</span><span class="i-code">0x1f44e</span></li>
					<li title="Code: 0x1f4e5"><i class="xn-download"></i> <span class="i-name">xn-download</span><span class="i-code">0x1f4e5</span></li>
					<li title="Code: 0x1f4e4"><i class="xn-upload"></i> <span class="i-name">xn-upload</span><span class="i-code">0x1f4e4</span></li>
					<li title="Code: 0xe711"><i class="xn-upload-cloud"></i> <span class="i-name">xn-upload-cloud</span><span class="i-code">0xe711</span></li>
					<li title="Code: 0xe712"><i class="xn-reply"></i> <span class="i-name">xn-reply</span><span class="i-code">0xe712</span></li>
					<li title="Code: 0xe713"><i class="xn-reply-all"></i> <span class="i-name">xn-reply-all</span><span class="i-code">0xe713</span></li>
					<li title="Code: 0x27a6"><i class="xn-forward"></i> <span class="i-name">xn-forward</span><span class="i-code">0x27a6</span></li>
					<li title="Code: 0x275e"><i class="xn-quote"></i> <span class="i-name">xn-quote</span><span class="i-code">0x275e</span></li>
					<li title="Code: 0xe714"><i class="xn-code"></i> <span class="i-name">xn-code</span><span class="i-code">0xe714</span></li>
					<li title="Code: 0xe715"><i class="xn-export"></i> <span class="i-name">xn-export</span><span class="i-code">0xe715</span></li>
					<li title="Code: 0x270e"><i class="xn-pencil"></i> <span class="i-name">xn-pencil</span><span class="i-code">0x270e</span></li>
					<li title="Code: 0x2712"><i class="xn-feather"></i> <span class="i-name">xn-feather</span><span class="i-code">0x2712</span></li>
					<li title="Code: 0xe716"><i class="xn-print"></i> <span class="i-name">xn-print</span><span class="i-code">0xe716</span></li>
					<li title="Code: 0xe717"><i class="xn-retweet"></i> <span class="i-name">xn-retweet</span><span class="i-code">0xe717</span></li>
					<li title="Code: 0x2328"><i class="xn-keyboard"></i> <span class="i-name">xn-keyboard</span><span class="i-code">0x2328</span></li>
					<li title="Code: 0xe718"><i class="xn-comment"></i> <span class="i-name">xn-comment</span><span class="i-code">0xe718</span></li>
					<li title="Code: 0xe720"><i class="xn-chat"></i> <span class="i-name">xn-chat</span><span class="i-code">0xe720</span></li>
					<li title="Code: 0x1f514"><i class="xn-bell"></i> <span class="i-name">xn-bell</span><span class="i-code">0x1f514</span></li>
					<li title="Code: 0x26a0"><i class="xn-attention"></i> <span class="i-name">xn-attention</span><span class="i-code">0x26a0</span></li>
					<li title="Code: 0x1f4a5"><i class="xn-alert"></i> <span class="i-name">xn-alert</span><span class="i-code">0x1f4a5</span></li>
					<li title="Code: 0xe722"><i class="xn-vcard"></i> <span class="i-name">xn-vcard</span><span class="i-code">0xe722</span></li>
					<li title="Code: 0xe723"><i class="xn-address"></i> <span class="i-name">xn-address</span><span class="i-code">0xe723</span></li>
					<li title="Code: 0xe724"><i class="xn-location"></i> <span class="i-name">xn-location</span><span class="i-code">0xe724</span></li>
					<li title="Code: 0xe727"><i class="xn-map"></i> <span class="i-name">xn-map</span><span class="i-code">0xe727</span></li>
					<li title="Code: 0x27a2"><i class="xn-direction"></i> <span class="i-name">xn-direction</span><span class="i-code">0x27a2</span></li>
					<li title="Code: 0xe728"><i class="xn-compass"></i> <span class="i-name">xn-compass</span><span class="i-code">0xe728</span></li>
					<li title="Code: 0x2615"><i class="xn-cup"></i> <span class="i-name">xn-cup</span><span class="i-code">0x2615</span></li>
				</ul>
			</div>
			<div class="xlarge-3 large-3 medium-4 small-6 xsmall-12">
				<ul class="the-icons plain">
					<li title="Code: 0xe729"><i class="xn-trash"></i> <span class="i-name">xn-trash</span><span class="i-code">0xe729</span></li>
					<li title="Code: 0xe730"><i class="xn-doc"></i> <span class="i-name">xn-doc</span><span class="i-code">0xe730</span></li>
					<li title="Code: 0xe736"><i class="xn-docs"></i> <span class="i-name">xn-docs</span><span class="i-code">0xe736</span></li>
					<li title="Code: 0xe737"><i class="xn-doc-landscape"></i> <span class="i-name">xn-doc-landscape</span><span class="i-code">0xe737</span></li>
					<li title="Code: 0x1f4c4"><i class="xn-doc-text"></i> <span class="i-name">xn-doc-text</span><span class="i-code">0x1f4c4</span></li>
					<li title="Code: 0xe731"><i class="xn-doc-text-inv"></i> <span class="i-name">xn-doc-text-inv</span><span class="i-code">0xe731</span></li>
					<li title="Code: 0x1f4f0"><i class="xn-newspaper"></i> <span class="i-name">xn-newspaper</span><span class="i-code">0x1f4f0</span></li>
					<li title="Code: 0x1f4d6"><i class="xn-book-open"></i> <span class="i-name">xn-book-open</span><span class="i-code">0x1f4d6</span></li>
					<li title="Code: 0x1f4d5"><i class="xn-book"></i> <span class="i-name">xn-book</span><span class="i-code">0x1f4d5</span></li>
					<li title="Code: 0x1f4c1"><i class="xn-folder"></i> <span class="i-name">xn-folder</span><span class="i-code">0x1f4c1</span></li>
					<li title="Code: 0xe738"><i class="xn-archive"></i> <span class="i-name">xn-archive</span><span class="i-code">0xe738</span></li>
					<li title="Code: 0x1f4e6"><i class="xn-box"></i> <span class="i-name">xn-box</span><span class="i-code">0x1f4e6</span></li>
					<li title="Code: 0xe73a"><i class="xn-rss"></i> <span class="i-name">xn-rss</span><span class="i-code">0xe73a</span></li>
					<li title="Code: 0x1f4de"><i class="xn-phone"></i> <span class="i-name">xn-phone</span><span class="i-code">0x1f4de</span></li>
					<li title="Code: 0x2699"><i class="xn-cog"></i> <span class="i-name">xn-cog</span><span class="i-code">0x2699</span></li>
					<li title="Code: 0x2692"><i class="xn-tools"></i> <span class="i-name">xn-tools</span><span class="i-code">0x2692</span></li>
					<li title="Code: 0xe73c"><i class="xn-share"></i> <span class="i-name">xn-share</span><span class="i-code">0xe73c</span></li>
					<li title="Code: 0xe73e"><i class="xn-shareable"></i> <span class="i-name">xn-shareable</span><span class="i-code">0xe73e</span></li>
					<li title="Code: 0xe73d"><i class="xn-basket"></i> <span class="i-name">xn-basket</span><span class="i-code">0xe73d</span></li>
					<li title="Code: 0x1f45c"><i class="xn-bag"></i> <span class="i-name">xn-bag</span><span class="i-code">0x1f45c</span></li>
					<li title="Code: 0x1f4c5"><i class="xn-calendar"></i> <span class="i-name">xn-calendar</span><span class="i-code">0x1f4c5</span></li>
					<li title="Code: 0xe740"><i class="xn-login"></i> <span class="i-name">xn-login</span><span class="i-code">0xe740</span></li>
					<li title="Code: 0xe741"><i class="xn-logout"></i> <span class="i-name">xn-logout</span><span class="i-code">0xe741</span></li>
					<li title="Code: 0x1f3a4"><i class="xn-mic"></i> <span class="i-name">xn-mic</span><span class="i-code">0x1f3a4</span></li>
					<li title="Code: 0x1f507"><i class="xn-mute"></i> <span class="i-name">xn-mute</span><span class="i-code">0x1f507</span></li>
					<li title="Code: 0x1f50a"><i class="xn-sound"></i> <span class="i-name">xn-sound</span><span class="i-code">0x1f50a</span></li>
					<li title="Code: 0xe742"><i class="xn-volume"></i> <span class="i-name">xn-volume</span><span class="i-code">0xe742</span></li>
					<li title="Code: 0x1f554"><i class="xn-clock"></i> <span class="i-name">xn-clock</span><span class="i-code">0x1f554</span></li>
					<li title="Code: 0x23f3"><i class="xn-hourglass"></i> <span class="i-name">xn-hourglass</span><span class="i-code">0x23f3</span></li>
					<li title="Code: 0x1f4a1"><i class="xn-lamp"></i> <span class="i-name">xn-lamp</span><span class="i-code">0x1f4a1</span></li>
					<li title="Code: 0x1f505"><i class="xn-light-down"></i> <span class="i-name">xn-light-down</span><span class="i-code">0x1f505</span></li>
					<li title="Code: 0x1f506"><i class="xn-light-up"></i> <span class="i-name">xn-light-up</span><span class="i-code">0x1f506</span></li>
					<li title="Code: 0x25d1"><i class="xn-adjust"></i> <span class="i-name">xn-adjust</span><span class="i-code">0x25d1</span></li>
					<li title="Code: 0x1f6ab"><i class="xn-block"></i> <span class="i-name">xn-block</span><span class="i-code">0x1f6ab</span></li>
					<li title="Code: 0xe744"><i class="xn-resize-full"></i> <span class="i-name">xn-resize-full</span><span class="i-code">0xe744</span></li>
					<li title="Code: 0xe746"><i class="xn-resize-small"></i> <span class="i-name">xn-resize-small</span><span class="i-code">0xe746</span></li>
					<li title="Code: 0xe74c"><i class="xn-popup"></i> <span class="i-name">xn-popup</span><span class="i-code">0xe74c</span></li>
					<li title="Code: 0xe74d"><i class="xn-publish"></i> <span class="i-name">xn-publish</span><span class="i-code">0xe74d</span></li>
					<li title="Code: 0xe74e"><i class="xn-window"></i> <span class="i-name">xn-window</span><span class="i-code">0xe74e</span></li>
					<li title="Code: 0xe74f"><i class="xn-arrow-combo"></i> <span class="i-name">xn-arrow-combo</span><span class="i-code">0xe74f</span></li>
					<li title="Code: 0xe758"><i class="xn-down-circled"></i> <span class="i-name">xn-down-circled</span><span class="i-code">0xe758</span></li>
					<li title="Code: 0xe759"><i class="xn-left-circled"></i> <span class="i-name">xn-left-circled</span><span class="i-code">0xe759</span></li>
					<li title="Code: 0xe75a"><i class="xn-right-circled"></i> <span class="i-name">xn-right-circled</span><span class="i-code">0xe75a</span></li>
					<li title="Code: 0xe75b"><i class="xn-up-circled"></i> <span class="i-name">xn-up-circled</span><span class="i-code">0xe75b</span></li>
					<li title="Code: 0xe75c"><i class="xn-down-open"></i> <span class="i-name">xn-down-open</span><span class="i-code">0xe75c</span></li>
					<li title="Code: 0xe75d"><i class="xn-left-open"></i> <span class="i-name">xn-left-open</span><span class="i-code">0xe75d</span></li>
					<li title="Code: 0xe75e"><i class="xn-right-open"></i> <span class="i-name">xn-right-open</span><span class="i-code">0xe75e</span></li>
					<li title="Code: 0xe75f"><i class="xn-up-open"></i> <span class="i-name">xn-up-open</span><span class="i-code">0xe75f</span></li>
					<li title="Code: 0xe760"><i class="xn-down-open-mini"></i> <span class="i-name">xn-down-open-mini</span><span class="i-code">0xe760</span></li>
					<li title="Code: 0xe761"><i class="xn-left-open-mini"></i> <span class="i-name">xn-left-open-mini</span><span class="i-code">0xe761</span></li>
					<li title="Code: 0xe762"><i class="xn-right-open-mini"></i> <span class="i-name">xn-right-open-mini</span><span class="i-code">0xe762</span></li>
					<li title="Code: 0xe763"><i class="xn-up-open-mini"></i> <span class="i-name">xn-up-open-mini</span><span class="i-code">0xe763</span></li>
					<li title="Code: 0xe764"><i class="xn-down-open-big"></i> <span class="i-name">xn-down-open-big</span><span class="i-code">0xe764</span></li>
					<li title="Code: 0xe765"><i class="xn-left-open-big"></i> <span class="i-name">xn-left-open-big</span><span class="i-code">0xe765</span></li>
					<li title="Code: 0xe766"><i class="xn-right-open-big"></i> <span class="i-name">xn-right-open-big</span><span class="i-code">0xe766</span></li>
					<li title="Code: 0xe767"><i class="xn-up-open-big"></i> <span class="i-name">xn-up-open-big</span><span class="i-code">0xe767</span></li>
					<li title="Code: 0x2b07"><i class="xn-down"></i> <span class="i-name">xn-down</span><span class="i-code">0x2b07</span></li>
					<li title="Code: 0x2b05"><i class="xn-left"></i> <span class="i-name">xn-left</span><span class="i-code">0x2b05</span></li>
					<li title="Code: 0x27a1"><i class="xn-right"></i> <span class="i-name">xn-right</span><span class="i-code">0x27a1</span></li>
					<li title="Code: 0x2b06"><i class="xn-up"></i> <span class="i-name">xn-up</span><span class="i-code">0x2b06</span></li>
					<li title="Code: 0x25be"><i class="xn-down-dir"></i> <span class="i-name">xn-down-dir</span><span class="i-code">0x25be</span></li>
					<li title="Code: 0x25c2"><i class="xn-left-dir"></i> <span class="i-name">xn-left-dir</span><span class="i-code">0x25c2</span></li>
					<li title="Code: 0x25b8"><i class="xn-right-dir"></i> <span class="i-name">xn-right-dir</span><span class="i-code">0x25b8</span></li>
					<li title="Code: 0x25b4"><i class="xn-up-dir"></i> <span class="i-name">xn-up-dir</span><span class="i-code">0x25b4</span></li>
					<li title="Code: 0xe4b0"><i class="xn-down-bold"></i> <span class="i-name">xn-down-bold</span><span class="i-code">0xe4b0</span></li>
					<li title="Code: 0xe4ad"><i class="xn-left-bold"></i> <span class="i-name">xn-left-bold</span><span class="i-code">0xe4ad</span></li>
					<li title="Code: 0xe4ae"><i class="xn-right-bold"></i> <span class="i-name">xn-right-bold</span><span class="i-code">0xe4ae</span></li>
					<li title="Code: 0xe4af"><i class="xn-up-bold"></i> <span class="i-name">xn-up-bold</span><span class="i-code">0xe4af</span></li>
					<li title="Code: 0x2193"><i class="xn-down-thin"></i> <span class="i-name">xn-down-thin</span><span class="i-code">0x2193</span></li>
					<li title="Code: 0x2190"><i class="xn-left-thin"></i> <span class="i-name">xn-left-thin</span><span class="i-code">0x2190</span></li>
					<li title="Code: 0x2192"><i class="xn-right-thin"></i> <span class="i-name">xn-right-thin</span><span class="i-code">0x2192</span></li>
				</ul>
			</div>
			<div class="xlarge-3 large-3 medium-4 small-6 xsmall-12">
				<ul class="the-icons plain">
					<li title="Code: 0x2191"><i class="xn-up-thin"></i> <span class="i-name">xn-up-thin</span><span class="i-code">0x2191</span></li>
					<li title="Code: 0x27f2"><i class="xn-ccw"></i> <span class="i-name">xn-ccw</span><span class="i-code">0x27f2</span></li>
					<li title="Code: 0x27f3"><i class="xn-cw"></i> <span class="i-name">xn-cw</span><span class="i-code">0x27f3</span></li>
					<li title="Code: 0x1f504"><i class="xn-arrows-ccw"></i> <span class="i-name">xn-arrows-ccw</span><span class="i-code">0x1f504</span></li>
					<li title="Code: 0x21b3"><i class="xn-level-down"></i> <span class="i-name">xn-level-down</span><span class="i-code">0x21b3</span></li>
					<li title="Code: 0x21b0"><i class="xn-level-up"></i> <span class="i-name">xn-level-up</span><span class="i-code">0x21b0</span></li>
					<li title="Code: 0x1f500"><i class="xn-shuffle"></i> <span class="i-name">xn-shuffle</span><span class="i-code">0x1f500</span></li>
					<li title="Code: 0x1f501"><i class="xn-loop"></i> <span class="i-name">xn-loop</span><span class="i-code">0x1f501</span></li>
					<li title="Code: 0x21c6"><i class="xn-switch"></i> <span class="i-name">xn-switch</span><span class="i-code">0x21c6</span></li>
					<li title="Code: 0x25b6"><i class="xn-play"></i> <span class="i-name">xn-play</span><span class="i-code">0x25b6</span></li>
					<li title="Code: 0x25a0"><i class="xn-stop"></i> <span class="i-name">xn-stop</span><span class="i-code">0x25a0</span></li>
					<li title="Code: 0x2389"><i class="xn-pause"></i> <span class="i-name">xn-pause</span><span class="i-code">0x2389</span></li>
					<li title="Code: 0x26ab"><i class="xn-record"></i> <span class="i-name">xn-record</span><span class="i-code">0x26ab</span></li>
					<li title="Code: 0x23ed"><i class="xn-to-end"></i> <span class="i-name">xn-to-end</span><span class="i-code">0x23ed</span></li>
					<li title="Code: 0x23ee"><i class="xn-to-start"></i> <span class="i-name">xn-to-start</span><span class="i-code">0x23ee</span></li>
					<li title="Code: 0x23e9"><i class="xn-fast-forward"></i> <span class="i-name">xn-fast-forward</span><span class="i-code">0x23e9</span></li>
					<li title="Code: 0x23ea"><i class="xn-fast-backward"></i> <span class="i-name">xn-fast-backward</span><span class="i-code">0x23ea</span></li>
					<li title="Code: 0xe768"><i class="xn-progress-0"></i> <span class="i-name">xn-progress-0</span><span class="i-code">0xe768</span></li>
					<li title="Code: 0xe769"><i class="xn-progress-1"></i> <span class="i-name">xn-progress-1</span><span class="i-code">0xe769</span></li>
					<li title="Code: 0xe76a"><i class="xn-progress-2"></i> <span class="i-name">xn-progress-2</span><span class="i-code">0xe76a</span></li>
					<li title="Code: 0xe76b"><i class="xn-progress-3"></i> <span class="i-name">xn-progress-3</span><span class="i-code">0xe76b</span></li>
					<li title="Code: 0x1f3af"><i class="xn-target"></i> <span class="i-name">xn-target</span><span class="i-code">0x1f3af</span></li>
					<li title="Code: 0x1f3a8"><i class="xn-palette"></i> <span class="i-name">xn-palette</span><span class="i-code">0x1f3a8</span></li>
					<li title="Code: 0xe005"><i class="xn-list"></i> <span class="i-name">xn-list</span><span class="i-code">0xe005</span></li>
					<li title="Code: 0xe003"><i class="xn-list-add"></i> <span class="i-name">xn-list-add</span><span class="i-code">0xe003</span></li>
					<li title="Code: 0x1f4f6"><i class="xn-signal"></i> <span class="i-name">xn-signal</span><span class="i-code">0x1f4f6</span></li>
					<li title="Code: 0x1f3c6"><i class="xn-trophy"></i> <span class="i-name">xn-trophy</span><span class="i-code">0x1f3c6</span></li>
					<li title="Code: 0x1f50b"><i class="xn-battery"></i> <span class="i-name">xn-battery</span><span class="i-code">0x1f50b</span></li>
					<li title="Code: 0xe771"><i class="xn-back-in-time"></i> <span class="i-name">xn-back-in-time</span><span class="i-code">0xe771</span></li>
					<li title="Code: 0x1f4bb"><i class="xn-monitor"></i> <span class="i-name">xn-monitor</span><span class="i-code">0x1f4bb</span></li>
					<li title="Code: 0x1f4f1"><i class="xn-mobile"></i> <span class="i-name">xn-mobile</span><span class="i-code">0x1f4f1</span></li>
					<li title="Code: 0xe776"><i class="xn-network"></i> <span class="i-name">xn-network</span><span class="i-code">0xe776</span></li>
					<li title="Code: 0x1f4bf"><i class="xn-cd"></i> <span class="i-name">xn-cd</span><span class="i-code">0x1f4bf</span></li>
					<li title="Code: 0xe777"><i class="xn-inbox"></i> <span class="i-name">xn-inbox</span><span class="i-code">0xe777</span></li>
					<li title="Code: 0xe778"><i class="xn-install"></i> <span class="i-name">xn-install</span><span class="i-code">0xe778</span></li>
					<li title="Code: 0x1f30e"><i class="xn-globe"></i> <span class="i-name">xn-globe</span><span class="i-code">0x1f30e</span></li>
					<li title="Code: 0x2601"><i class="xn-cloud"></i> <span class="i-name">xn-cloud</span><span class="i-code">0x2601</span></li>
					<li title="Code: 0x26c8"><i class="xn-cloud-thunder"></i> <span class="i-name">xn-cloud-thunder</span><span class="i-code">0x26c8</span></li>
					<li title="Code: 0x26a1"><i class="xn-flash"></i> <span class="i-name">xn-flash</span><span class="i-code">0x26a1</span></li>
					<li title="Code: 0x263d"><i class="xn-moon"></i> <span class="i-name">xn-moon</span><span class="i-code">0x263d</span></li>
					<li title="Code: 0x2708"><i class="xn-flight"></i> <span class="i-name">xn-flight</span><span class="i-code">0x2708</span></li>
					<li title="Code: 0xe79b"><i class="xn-paper-plane"></i> <span class="i-name">xn-paper-plane</span><span class="i-code">0xe79b</span></li>
					<li title="Code: 0x1f342"><i class="xn-leaf"></i> <span class="i-name">xn-leaf</span><span class="i-code">0x1f342</span></li>
					<li title="Code: 0xe788"><i class="xn-lifebuoy"></i> <span class="i-name">xn-lifebuoy</span><span class="i-code">0xe788</span></li>
					<li title="Code: 0xe789"><i class="xn-mouse"></i> <span class="i-name">xn-mouse</span><span class="i-code">0xe789</span></li>
					<li title="Code: 0x1f4bc"><i class="xn-briefcase"></i> <span class="i-name">xn-briefcase</span><span class="i-code">0x1f4bc</span></li>
					<li title="Code: 0xe78e"><i class="xn-suitcase"></i> <span class="i-name">xn-suitcase</span><span class="i-code">0xe78e</span></li>
					<li title="Code: 0xe78b"><i class="xn-dot"></i> <span class="i-name">xn-dot</span><span class="i-code">0xe78b</span></li>
					<li title="Code: 0xe78c"><i class="xn-dot-2"></i> <span class="i-name">xn-dot-2</span><span class="i-code">0xe78c</span></li>
					<li title="Code: 0xe78d"><i class="xn-dot-3"></i> <span class="i-name">xn-dot-3</span><span class="i-code">0xe78d</span></li>
					<li title="Code: 0xe79a"><i class="xn-brush"></i> <span class="i-name">xn-brush</span><span class="i-code">0xe79a</span></li>
					<li title="Code: 0xe7a1"><i class="xn-magnet"></i> <span class="i-name">xn-magnet</span><span class="i-code">0xe7a1</span></li>
					<li title="Code: 0x221e"><i class="xn-infinity"></i> <span class="i-name">xn-infinity</span><span class="i-code">0x221e</span></li>
					<li title="Code: 0x232b"><i class="xn-erase"></i> <span class="i-name">xn-erase</span><span class="i-code">0x232b</span></li>
					<li title="Code: 0xe751"><i class="xn-chart-pie"></i> <span class="i-name">xn-chart-pie</span><span class="i-code">0xe751</span></li>
					<li title="Code: 0x1f4c8"><i class="xn-chart-line"></i> <span class="i-name">xn-chart-line</span><span class="i-code">0x1f4c8</span></li>
					<li title="Code: 0x1f4ca"><i class="xn-chart-bar"></i> <span class="i-name">xn-chart-bar</span><span class="i-code">0x1f4ca</span></li>
					<li title="Code: 0x1f53e"><i class="xn-chart-area"></i> <span class="i-name">xn-chart-area</span><span class="i-code">0x1f53e</span></li>
					<li title="Code: 0x2707"><i class="xn-tape"></i> <span class="i-name">xn-tape</span><span class="i-code">0x2707</span></li>
					<li title="Code: 0x1f393"><i class="xn-graduation-cap"></i> <span class="i-name">xn-graduation-cap</span><span class="i-code">0x1f393</span></li>
					<li title="Code: 0xe752"><i class="xn-language"></i> <span class="i-name">xn-language</span><span class="i-code">0xe752</span></li>
					<li title="Code: 0x1f3ab"><i class="xn-ticket"></i> <span class="i-name">xn-ticket</span><span class="i-code">0x1f3ab</span></li>
					<li title="Code: 0x1f4a6"><i class="xn-water"></i> <span class="i-name">xn-water</span><span class="i-code">0x1f4a6</span></li>
					<li title="Code: 0x1f4a7"><i class="xn-droplet"></i> <span class="i-name">xn-droplet</span><span class="i-code">0x1f4a7</span></li>
					<li title="Code: 0xe753"><i class="xn-air"></i> <span class="i-name">xn-air</span><span class="i-code">0xe753</span></li>
					<li title="Code: 0x1f4b3"><i class="xn-credit-card"></i> <span class="i-name">xn-credit-card</span><span class="i-code">0x1f4b3</span></li>
					<li title="Code: 0x1f4be"><i class="xn-floppy"></i> <span class="i-name">xn-floppy</span><span class="i-code">0x1f4be</span></li>
					<li title="Code: 0x1f4cb"><i class="xn-clipboard"></i> <span class="i-name">xn-clipboard</span><span class="i-code">0x1f4cb</span></li>
					<li title="Code: 0x1f4e3"><i class="xn-megaphone"></i> <span class="i-name">xn-megaphone</span><span class="i-code">0x1f4e3</span></li>
					<li title="Code: 0xe754"><i class="xn-database"></i> <span class="i-name">xn-database</span><span class="i-code">0xe754</span></li>
					<li title="Code: 0xe755"><i class="xn-drive"></i> <span class="i-name">xn-drive</span><span class="i-code">0xe755</span></li>
				</ul>
			</div>
			<div class="xlarge-3 large-3 medium-4 small-6 xsmall-12">
				<ul class="the-icons plain">
					<li title="Code: 0xe756"><i class="xn-bucket"></i> <span class="i-name">xn-bucket</span><span class="i-code">0xe756</span></li>
					<li title="Code: 0xe757"><i class="xn-thermometer"></i> <span class="i-name">xn-thermometer</span><span class="i-code">0xe757</span></li>
					<li title="Code: 0x1f511"><i class="xn-key"></i> <span class="i-name">xn-key</span><span class="i-code">0x1f511</span></li>
					<li title="Code: 0xe790"><i class="xn-flow-cascade"></i> <span class="i-name">xn-flow-cascade</span><span class="i-code">0xe790</span></li>
					<li title="Code: 0xe791"><i class="xn-flow-branch"></i> <span class="i-name">xn-flow-branch</span><span class="i-code">0xe791</span></li>
					<li title="Code: 0xe792"><i class="xn-flow-tree"></i> <span class="i-name">xn-flow-tree</span><span class="i-code">0xe792</span></li>
					<li title="Code: 0xe793"><i class="xn-flow-line"></i> <span class="i-name">xn-flow-line</span><span class="i-code">0xe793</span></li>
					<li title="Code: 0xe794"><i class="xn-flow-parallel"></i> <span class="i-name">xn-flow-parallel</span><span class="i-code">0xe794</span></li>
					<li title="Code: 0x1f680"><i class="xn-rocket"></i> <span class="i-name">xn-rocket</span><span class="i-code">0x1f680</span></li>
					<li title="Code: 0xe7a2"><i class="xn-gauge"></i> <span class="i-name">xn-gauge</span><span class="i-code">0xe7a2</span></li>
					<li title="Code: 0xe7a3"><i class="xn-traffic-cone"></i> <span class="i-name">xn-traffic-cone</span><span class="i-code">0xe7a3</span></li>
					<li title="Code: 0xe7a5"><i class="xn-cc"></i> <span class="i-name">xn-cc</span><span class="i-code">0xe7a5</span></li>
					<li title="Code: 0xe7a6"><i class="xn-cc-by"></i> <span class="i-name">xn-cc-by</span><span class="i-code">0xe7a6</span></li>
					<li title="Code: 0xe7a7"><i class="xn-cc-nc"></i> <span class="i-name">xn-cc-nc</span><span class="i-code">0xe7a7</span></li>
					<li title="Code: 0xe7a8"><i class="xn-cc-nc-eu"></i> <span class="i-name">xn-cc-nc-eu</span><span class="i-code">0xe7a8</span></li>
					<li title="Code: 0xe7a9"><i class="xn-cc-nc-jp"></i> <span class="i-name">xn-cc-nc-jp</span><span class="i-code">0xe7a9</span></li>
					<li title="Code: 0xe7aa"><i class="xn-cc-sa"></i> <span class="i-name">xn-cc-sa</span><span class="i-code">0xe7aa</span></li>
					<li title="Code: 0xe7ab"><i class="xn-cc-nd"></i> <span class="i-name">xn-cc-nd</span><span class="i-code">0xe7ab</span></li>
					<li title="Code: 0xe7ac"><i class="xn-cc-pd"></i> <span class="i-name">xn-cc-pd</span><span class="i-code">0xe7ac</span></li>
					<li title="Code: 0xe7ad"><i class="xn-cc-zero"></i> <span class="i-name">xn-cc-zero</span><span class="i-code">0xe7ad</span></li>
					<li title="Code: 0xe7ae"><i class="xn-cc-share"></i> <span class="i-name">xn-cc-share</span><span class="i-code">0xe7ae</span></li>
					<li title="Code: 0xe7af"><i class="xn-cc-remix"></i> <span class="i-name">xn-cc-remix</span><span class="i-code">0xe7af</span></li>
					<li title="Code: 0xf300"><i class="xn-github"></i> <span class="i-name">xn-github</span><span class="i-code">0xf300</span></li>
					<li title="Code: 0xf301"><i class="xn-github-circled"></i> <span class="i-name">xn-github-circled</span><span class="i-code">0xf301</span></li>
					<li title="Code: 0xf303"><i class="xn-flickr"></i> <span class="i-name">xn-flickr</span><span class="i-code">0xf303</span></li>
					<li title="Code: 0xf304"><i class="xn-flickr-circled"></i> <span class="i-name">xn-flickr-circled</span><span class="i-code">0xf304</span></li>
					<li title="Code: 0xf306"><i class="xn-vimeo"></i> <span class="i-name">xn-vimeo</span><span class="i-code">0xf306</span></li>
					<li title="Code: 0xf307"><i class="xn-vimeo-circled"></i> <span class="i-name">xn-vimeo-circled</span><span class="i-code">0xf307</span></li>
					<li title="Code: 0xf309"><i class="xn-twitter"></i> <span class="i-name">xn-twitter</span><span class="i-code">0xf309</span></li>
					<li title="Code: 0xf30a"><i class="xn-twitter-circled"></i> <span class="i-name">xn-twitter-circled</span><span class="i-code">0xf30a</span></li>
					<li title="Code: 0xf30c"><i class="xn-facebook"></i> <span class="i-name">xn-facebook</span><span class="i-code">0xf30c</span></li>
					<li title="Code: 0xf30d"><i class="xn-facebook-circled"></i> <span class="i-name">xn-facebook-circled</span><span class="i-code">0xf30d</span></li>
					<li title="Code: 0xf30e"><i class="xn-facebook-squared"></i> <span class="i-name">xn-facebook-squared</span><span class="i-code">0xf30e</span></li>
					<li title="Code: 0xf30f"><i class="xn-gplus"></i> <span class="i-name">xn-gplus</span><span class="i-code">0xf30f</span></li>
					<li title="Code: 0xf310"><i class="xn-gplus-circled"></i> <span class="i-name">xn-gplus-circled</span><span class="i-code">0xf310</span></li>
					<li title="Code: 0xf312"><i class="xn-pinterest"></i> <span class="i-name">xn-pinterest</span><span class="i-code">0xf312</span></li>
					<li title="Code: 0xf313"><i class="xn-pinterest-circled"></i> <span class="i-name">xn-pinterest-circled</span><span class="i-code">0xf313</span></li>
					<li title="Code: 0xf315"><i class="xn-tumblr"></i> <span class="i-name">xn-tumblr</span><span class="i-code">0xf315</span></li>
					<li title="Code: 0xf316"><i class="xn-tumblr-circled"></i> <span class="i-name">xn-tumblr-circled</span><span class="i-code">0xf316</span></li>
					<li title="Code: 0xf318"><i class="xn-linkedin"></i> <span class="i-name">xn-linkedin</span><span class="i-code">0xf318</span></li>
					<li title="Code: 0xf319"><i class="xn-linkedin-circled"></i> <span class="i-name">xn-linkedin-circled</span><span class="i-code">0xf319</span></li>
					<li title="Code: 0xf31b"><i class="xn-dribbble"></i> <span class="i-name">xn-dribbble</span><span class="i-code">0xf31b</span></li>
					<li title="Code: 0xf31c"><i class="xn-dribbble-circled"></i> <span class="i-name">xn-dribbble-circled</span><span class="i-code">0xf31c</span></li>
					<li title="Code: 0xf31e"><i class="xn-stumbleupon"></i> <span class="i-name">xn-stumbleupon</span><span class="i-code">0xf31e</span></li>
					<li title="Code: 0xf31f"><i class="xn-stumbleupon-circled"></i> <span class="i-name">xn-stumbleupon-circled</span><span class="i-code">0xf31f</span></li>
					<li title="Code: 0xf321"><i class="xn-lastfm"></i> <span class="i-name">xn-lastfm</span><span class="i-code">0xf321</span></li>
					<li title="Code: 0xf322"><i class="xn-lastfm-circled"></i> <span class="i-name">xn-lastfm-circled</span><span class="i-code">0xf322</span></li>
					<li title="Code: 0xf324"><i class="xn-rdio"></i> <span class="i-name">xn-rdio</span><span class="i-code">0xf324</span></li>
					<li title="Code: 0xf325"><i class="xn-rdio-circled"></i> <span class="i-name">xn-rdio-circled</span><span class="i-code">0xf325</span></li>
					<li title="Code: 0xf327"><i class="xn-spotify"></i> <span class="i-name">xn-spotify</span><span class="i-code">0xf327</span></li>
					<li title="Code: 0xf328"><i class="xn-spotify-circled"></i> <span class="i-name">xn-spotify-circled</span><span class="i-code">0xf328</span></li>
					<li title="Code: 0xf32a"><i class="xn-qq"></i> <span class="i-name">xn-qq</span><span class="i-code">0xf32a</span></li>
					<li title="Code: 0xf32d"><i class="xn-instagrem"></i> <span class="i-name">xn-instagrem</span><span class="i-code">0xf32d</span></li>
					<li title="Code: 0xf330"><i class="xn-dropbox"></i> <span class="i-name">xn-dropbox</span><span class="i-code">0xf330</span></li>
					<li title="Code: 0xf333"><i class="xn-evernote"></i> <span class="i-name">xn-evernote</span><span class="i-code">0xf333</span></li>
					<li title="Code: 0xf336"><i class="xn-flattr"></i> <span class="i-name">xn-flattr</span><span class="i-code">0xf336</span></li>
					<li title="Code: 0xf339"><i class="xn-skype"></i> <span class="i-name">xn-skype</span><span class="i-code">0xf339</span></li>
					<li title="Code: 0xf33a"><i class="xn-skype-circled"></i> <span class="i-name">xn-skype-circled</span><span class="i-code">0xf33a</span></li>
					<li title="Code: 0xf33c"><i class="xn-renren"></i> <span class="i-name">xn-renren</span><span class="i-code">0xf33c</span></li>
					<li title="Code: 0xf33f"><i class="xn-sina-weibo"></i> <span class="i-name">xn-sina-weibo</span><span class="i-code">0xf33f</span></li>
					<li title="Code: 0xf342"><i class="xn-paypal"></i> <span class="i-name">xn-paypal</span><span class="i-code">0xf342</span></li>
					<li title="Code: 0xf345"><i class="xn-picasa"></i> <span class="i-name">xn-picasa</span><span class="i-code">0xf345</span></li>
					<li title="Code: 0xf348"><i class="xn-soundcloud"></i> <span class="i-name">xn-soundcloud</span><span class="i-code">0xf348</span></li>
					<li title="Code: 0xf34b"><i class="xn-mixi"></i> <span class="i-name">xn-mixi</span><span class="i-code">0xf34b</span></li>
					<li title="Code: 0xf34e"><i class="xn-behance"></i> <span class="i-name">xn-behance</span><span class="i-code">0xf34e</span></li>
					<li title="Code: 0xf351"><i class="xn-google-circles"></i> <span class="i-name">xn-google-circles</span><span class="i-code">0xf351</span></li>
					<li title="Code: 0xf354"><i class="xn-vkontakte"></i> <span class="i-name">xn-vkontakte</span><span class="i-code">0xf354</span></li>
					<li title="Code: 0xf357"><i class="xn-smashing"></i> <span class="i-name">xn-smashing</span><span class="i-code">0xf357</span></li>
					<li title="Code: 0xf601"><i class="xn-sweden"></i> <span class="i-name">xn-sweden</span><span class="i-code">0xf601</span></li>
					<li title="Code: 0xf600"><i class="xn-db-shape"></i> <span class="i-name">xn-db-shape</span><span class="i-code">0xf600</span></li>
					<li title="Code: 0xf603"><i class="xn-logo-db"></i> <span class="i-name">xn-logo-db</span><span class="i-code">0xf603</span></li>
				</ul>
			</div>
		</div>
	</div>
@stop

@section('contextual')
@stop
