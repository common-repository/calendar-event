<?php
class Total_Soft_Cal extends WP_Widget{
    public $ts_calendar_fonts;
	function __construct(){
		$params=array(
			'name'       =>'Total Soft Calendar',
			'description'=>__('This is the widget of Total Soft Calendar plugin','Total-Soft-Calendar')
		);
		parent::__construct('Total_Soft_Cal','',$params);
        $this->ts_calendar_fonts=array(
            'Amaranth'                  => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=KtkuALODe433f0j1zMnFHdc&skey=a086a5f010412431&v=v16#Amaranth',
                'woff'  => 'https://fonts.gstatic.com/s/amaranth/v16/KtkuALODe433f0j1zMnFHdY.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/amaranth/v16/KtkuALODe433f0j1zMnFHdU.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/amaranth/v16/KtkuALODe433f0j1zMnFHdQ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/amaranth/v16/KtkuALODe433f0j1zMnFHdA.woff2',
            ),
            'Anton'                     => array(
                'woff'  => 'https://fonts.gstatic.com/s/anton/v22/1Ptgg87LROyAm3Kz-Ck.woff',
                'eot'   => 'https://fonts.gstatic.com/s/anton/v22/1Ptgg87LROyAm3Kz-Cs.eot',
                'woff2' => 'https://fonts.gstatic.com/s/anton/v22/1Ptgg87LROyAm3Kz-C8.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/anton/v22/1Ptgg87LROyAm3Kz-Co.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=1Ptgg87LROyAm3Kz-Cg&skey=3e16a04254d4c9b3&v=v22#Anton',
            ),
            'Battambang'                => array(
                'woff2' => 'https://fonts.gstatic.com/s/battambang/v22/uk-mEGe7raEw-HjkzZabPnKp4g.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/battambang/v22/uk-mEGe7raEw-HjkzZabPnKp5A.woff',
                'eot'   => 'https://fonts.gstatic.com/s/battambang/v22/uk-mEGe7raEw-HjkzZabPnKp5g.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=uk-mEGe7raEw-HjkzZabPnKp5Q&skey=d567eed92f92816&v=v22#Battambang',
                'ttf'   => 'https://fonts.gstatic.com/s/battambang/v22/uk-mEGe7raEw-HjkzZabPnKp5w.ttf',
            ),
            'Baumans'                   => array(
                'woff2' => 'https://fonts.gstatic.com/s/baumans/v15/-W_-XJj9QyTd3Qfpd_04aw.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/baumans/v15/-W_-XJj9QyTd3Qfpd_04bQ.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/baumans/v15/-W_-XJj9QyTd3Qfpd_04bg.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=-W_-XJj9QyTd3Qfpd_04bA&skey=34ab2ddaf19de28&v=v15#Baumans',
                'eot'   => 'https://fonts.gstatic.com/s/baumans/v15/-W_-XJj9QyTd3Qfpd_04bw.eot',
            ),
            'Bungee Shade'              => array(
                'ttf'   => 'https://fonts.gstatic.com/s/bungeeshade/v9/DtVkJxarWL0t2KdzK3oI_jkc6SjW.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/bungeeshade/v9/DtVkJxarWL0t2KdzK3oI_jkc6SjV.woff',
                'eot'   => 'https://fonts.gstatic.com/s/bungeeshade/v9/DtVkJxarWL0t2KdzK3oI_jkc6SjX.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=DtVkJxarWL0t2KdzK3oI_jkc6SjU&skey=fbfaf26ed37f085b&v=v9#BungeeShade',
                'woff2' => 'https://fonts.gstatic.com/s/bungeeshade/v9/DtVkJxarWL0t2KdzK3oI_jkc6SjT.woff2',
            ),
            'Butcherman'                => array(
                'eot'   => 'https://fonts.gstatic.com/s/butcherman/v22/2EbiL-thF0loflXUBOdb5zK5rg.eot',
                'woff'  => 'https://fonts.gstatic.com/s/butcherman/v22/2EbiL-thF0loflXUBOdb5zK5rA.woff',
                'woff2' => 'https://fonts.gstatic.com/s/butcherman/v22/2EbiL-thF0loflXUBOdb5zK5qg.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/butcherman/v22/2EbiL-thF0loflXUBOdb5zK5rw.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=2EbiL-thF0loflXUBOdb5zK5rQ&skey=a81c66da830bfcb3&v=v22#Butcherman',
            ),
            'Cabin'                     => array(
                'woff'  => 'https://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EH7alwQ.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EH7alwg.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EH7alwA&skey=d53a2c61c6b52b74&v=v18#Cabin',
                'woff2' => 'https://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EH7alxw.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EH7alww.eot',
            ),
            'Cabin Sketch'              => array(
                'eot'   => 'https://fonts.gstatic.com/s/cabinsketch/v17/QGYpz_kZZAGCONcK2A4bGOj8mNhJ.eot',
                'woff'  => 'https://fonts.gstatic.com/s/cabinsketch/v17/QGYpz_kZZAGCONcK2A4bGOj8mNhL.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=QGYpz_kZZAGCONcK2A4bGOj8mNhK&skey=64590cfdee656fb9&v=v17#CabinSketch',
                'woff2' => 'https://fonts.gstatic.com/s/cabinsketch/v17/QGYpz_kZZAGCONcK2A4bGOj8mNhN.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/cabinsketch/v17/QGYpz_kZZAGCONcK2A4bGOj8mNhI.ttf',
            ),
            'Cairo'                     => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=SLXVc1nY6HkvangtZmpcWmhzfH5lWWgcRiyV&skey=ee6e3b9105e1a754&v=v17#Cairo',
                'woff2' => 'https://fonts.gstatic.com/s/cairo/v17/SLXVc1nY6HkvangtZmpcWmhzfH5lWWgcRiyS.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/cairo/v17/SLXVc1nY6HkvangtZmpcWmhzfH5lWWgcRiyW.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/cairo/v17/SLXVc1nY6HkvangtZmpcWmhzfH5lWWgcRiyX.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/cairo/v17/SLXVc1nY6HkvangtZmpcWmhzfH5lWWgcRiyU.woff',
            ),
            'Damion'                    => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=hv-XlzJ3KEUe_YZkamwx&skey=cab2b817d665dc28&v=v10#Damion',
                'eot'   => 'https://fonts.gstatic.com/s/damion/v10/hv-XlzJ3KEUe_YZkamwy.eot',
                'woff'  => 'https://fonts.gstatic.com/s/damion/v10/hv-XlzJ3KEUe_YZkamww.woff',
                'woff2' => 'https://fonts.gstatic.com/s/damion/v10/hv-XlzJ3KEUe_YZkamw2.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/damion/v10/hv-XlzJ3KEUe_YZkamwz.ttf',
            ),
            'Eagle Lake'                => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=ptRMTiqbbuNJDOiKj9wG1On4Lw&skey=63718d6a75d9c744&v=v18#EagleLake',
                'woff'  => 'https://fonts.gstatic.com/s/eaglelake/v18/ptRMTiqbbuNJDOiKj9wG1On4Lg.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/eaglelake/v18/ptRMTiqbbuNJDOiKj9wG1On4LQ.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/eaglelake/v18/ptRMTiqbbuNJDOiKj9wG1On4LA.eot',
                'woff2' => 'https://fonts.gstatic.com/s/eaglelake/v18/ptRMTiqbbuNJDOiKj9wG1On4KA.woff2',
            ),
            'East Sea Dokdo'            => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=xfuo0Wn2V2_KanASqXSZp22m06_dE60&skey=44c2728630a38fc5&v=v18#EastSeaDokdo',
                'woff2' => 'https://fonts.gstatic.com/s/eastseadokdo/v18/xfuo0Wn2V2_KanASqXSZp22m06_dE6o.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/eastseadokdo/v18/xfuo0Wn2V2_KanASqXSZp22m06_dE68.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/eastseadokdo/v18/xfuo0Wn2V2_KanASqXSZp22m06_dE64.eot',
                'woff'  => 'https://fonts.gstatic.com/s/eastseadokdo/v18/xfuo0Wn2V2_KanASqXSZp22m06_dE6w.woff',
            ),
            'Fira Sans Condensed'       => array(
                'eot'   => 'https://fonts.gstatic.com/s/firasanscondensed/v9/wEOhEADFm8hSaQTFG18FErVhsC9x-tarUfbtqQ.eot',
                'woff'  => 'https://fonts.gstatic.com/s/firasanscondensed/v9/wEOhEADFm8hSaQTFG18FErVhsC9x-tarUfbtqw.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=wEOhEADFm8hSaQTFG18FErVhsC9x-tarUfbtqg&skey=96eb1234fcb38aea&v=v9#FiraSansCondensed',
                'woff2' => 'https://fonts.gstatic.com/s/firasanscondensed/v9/wEOhEADFm8hSaQTFG18FErVhsC9x-tarUfbtrQ.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/firasanscondensed/v9/wEOhEADFm8hSaQTFG18FErVhsC9x-tarUfbtqA.ttf',
            ),
            'Fira Sans Extra Condensed' => array(
                'eot'   => 'https://fonts.gstatic.com/s/firasansextracondensed/v8/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1f-uvg.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1f-uvQ&skey=6da40aeae3bd26bf&v=v8#FiraSansExtraCondensed',
                'woff'  => 'https://fonts.gstatic.com/s/firasansextracondensed/v8/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1f-uvA.woff',
                'woff2' => 'https://fonts.gstatic.com/s/firasansextracondensed/v8/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1f-uug.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/firasansextracondensed/v8/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1f-uvw.ttf',
            ),
            'Gafata'                    => array(
                'ttf'   => 'https://fonts.gstatic.com/s/gafata/v14/XRXV3I6Cn0VJKonINeaE.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/gafata/v14/XRXV3I6Cn0VJKonINeaH.woff',
                'woff2' => 'https://fonts.gstatic.com/s/gafata/v14/XRXV3I6Cn0VJKonINeaB.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=XRXV3I6Cn0VJKonINeaG&skey=ac32f67a7703448a&v=v14#Gafata',
                'eot'   => 'https://fonts.gstatic.com/s/gafata/v14/XRXV3I6Cn0VJKonINeaF.eot',
            ),
            'Jacques Francois'          => array(
                'eot'   => 'https://fonts.gstatic.com/s/jacquesfrancois/v18/ZXu9e04ZvKeOOHIe1TMahbcIU2cgqcTgpA.eot',
                'woff'  => 'https://fonts.gstatic.com/s/jacquesfrancois/v18/ZXu9e04ZvKeOOHIe1TMahbcIU2cgqcTgpg.woff',
                'woff2' => 'https://fonts.gstatic.com/s/jacquesfrancois/v18/ZXu9e04ZvKeOOHIe1TMahbcIU2cgqcTgoA.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/jacquesfrancois/v18/ZXu9e04ZvKeOOHIe1TMahbcIU2cgqcTgpQ.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=ZXu9e04ZvKeOOHIe1TMahbcIU2cgqcTgpw&skey=f331cd55df0362a4&v=v18#JacquesFrancois',
            ),
            'Headland One'              => array(
                'woff'  => 'https://fonts.gstatic.com/s/headlandone/v13/yYLu0hHR2vKnp89Tk1TCq3TB1_NU.woff',
                'woff2' => 'https://fonts.gstatic.com/s/headlandone/v13/yYLu0hHR2vKnp89Tk1TCq3TB1_NS.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/headlandone/v13/yYLu0hHR2vKnp89Tk1TCq3TB1_NX.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/headlandone/v13/yYLu0hHR2vKnp89Tk1TCq3TB1_NW.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=yYLu0hHR2vKnp89Tk1TCq3TB1_NV&skey=8cb712da05e7381c&v=v13#HeadlandOne',
            ),
            'Katibeh'                   => array(
                'woff2' => 'https://fonts.gstatic.com/s/katibeh/v15/ZGjXol5MQJog4bxDWCpbVQ.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/katibeh/v15/ZGjXol5MQJog4bxDWCpbUQ.eot',
                'woff'  => 'https://fonts.gstatic.com/s/katibeh/v15/ZGjXol5MQJog4bxDWCpbUw.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/katibeh/v15/ZGjXol5MQJog4bxDWCpbUA.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=ZGjXol5MQJog4bxDWCpbUg&skey=5f417d48499acf32&v=v15#Katibeh',
            ),
            'Monsieur La Doulaise'      => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZm5ZyEc&skey=f0bf0703ab573473&v=v12#MonsieurLaDoulaise',
                'eot'   => 'https://fonts.gstatic.com/s/monsieurladoulaise/v12/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZm5ZyEQ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/monsieurladoulaise/v12/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZm5ZyEA.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/monsieurladoulaise/v12/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZm5ZyEU.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/monsieurladoulaise/v12/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZm5ZyEY.woff',
            ),
            'Mr De Haviland'            => array(
                'woff2' => 'https://fonts.gstatic.com/s/mrdehaviland/v12/OpNVnooIhJj96FdB73296ksbOg3F60M.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/mrdehaviland/v12/OpNVnooIhJj96FdB73296ksbOg3F60c.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=OpNVnooIhJj96FdB73296ksbOg3F60Q&skey=4c1b286187a2a4c2&v=v12#MrDeHaviland',
                'ttf'   => 'https://fonts.gstatic.com/s/mrdehaviland/v12/OpNVnooIhJj96FdB73296ksbOg3F60Y.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/mrdehaviland/v12/OpNVnooIhJj96FdB73296ksbOg3F60U.woff',
            ),
            'Nova Script'               => array(
                'woff'  => 'https://fonts.gstatic.com/s/novascript/v23/7Au7p_IpkSWSTWaFWkumvlQKGFo.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/novascript/v23/7Au7p_IpkSWSTWaFWkumvlQKGFk.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/novascript/v23/7Au7p_IpkSWSTWaFWkumvlQKGFg.eot',
                'woff2' => 'https://fonts.gstatic.com/s/novascript/v23/7Au7p_IpkSWSTWaFWkumvlQKGFw.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=7Au7p_IpkSWSTWaFWkumvlQKGFs&skey=5c166543e0bd14ed&v=v23#NovaScript',
            ),
            'Nova Square'               => array(
                'woff'  => 'https://fonts.gstatic.com/s/novasquare/v18/RrQUbo9-9DV7b06QHgSWsahHT4Q.woff',
                'eot'   => 'https://fonts.gstatic.com/s/novasquare/v18/RrQUbo9-9DV7b06QHgSWsahHT4Y.eot',
                'woff2' => 'https://fonts.gstatic.com/s/novasquare/v18/RrQUbo9-9DV7b06QHgSWsahHT4I.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/novasquare/v18/RrQUbo9-9DV7b06QHgSWsahHT4c.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=RrQUbo9-9DV7b06QHgSWsahHT4U&skey=eda40973f7ff17ba&v=v18#NovaSquare',
            ),
            'Odor Mean Chey'            => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=raxkHiKDttkTe1aOGcJMR1A_4lrf0Tw&skey=71cf597ba81383f1&v=v25#OdorMeanChey',
                'woff'  => 'https://fonts.gstatic.com/s/odormeanchey/v25/raxkHiKDttkTe1aOGcJMR1A_4lrf0T0.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/odormeanchey/v25/raxkHiKDttkTe1aOGcJMR1A_4lrf0T4.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/odormeanchey/v25/raxkHiKDttkTe1aOGcJMR1A_4lrf0Ts.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/odormeanchey/v25/raxkHiKDttkTe1aOGcJMR1A_4lrf0T8.eot',
            ),
            'Offside'                   => array(
                'woff'  => 'https://fonts.gstatic.com/s/offside/v18/HI_KiYMWKa9QrAykc5boQQ.woff',
                'woff2' => 'https://fonts.gstatic.com/s/offside/v18/HI_KiYMWKa9QrAykc5boRw.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/offside/v18/HI_KiYMWKa9QrAykc5boQw.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/offside/v18/HI_KiYMWKa9QrAykc5boQg.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=HI_KiYMWKa9QrAykc5boQA&skey=5442f4302844a3cf&v=v18#Offside',
            ),
            'Old Standard TT'           => array(
                'woff'  => 'https://fonts.gstatic.com/s/oldstandardtt/v17/MwQubh3o1vLImiwAVvYawgcf2eVeqlq-.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=MwQubh3o1vLImiwAVvYawgcf2eVeqlq_&skey=f1cef4e9ada09fef&v=v17#OldStandardTT',
                'eot'   => 'https://fonts.gstatic.com/s/oldstandardtt/v17/MwQubh3o1vLImiwAVvYawgcf2eVeqlq8.eot',
                'woff2' => 'https://fonts.gstatic.com/s/oldstandardtt/v17/MwQubh3o1vLImiwAVvYawgcf2eVeqlq4.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/oldstandardtt/v17/MwQubh3o1vLImiwAVvYawgcf2eVeqlq9.ttf',
            ),
            'Oldenburg'                 => array(
                'ttf'   => 'https://fonts.gstatic.com/s/oldenburg/v18/fC1jPY5JYWzbywv7c4VKVkSs.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/oldenburg/v18/fC1jPY5JYWzbywv7c4VKVkSt.eot',
                'woff'  => 'https://fonts.gstatic.com/s/oldenburg/v18/fC1jPY5JYWzbywv7c4VKVkSv.woff',
                'woff2' => 'https://fonts.gstatic.com/s/oldenburg/v18/fC1jPY5JYWzbywv7c4VKVkSp.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=fC1jPY5JYWzbywv7c4VKVkSu&skey=9bde624bd7bf0d51&v=v18#Oldenburg',
            ),
            'Oxygen'                    => array(
                'woff'  => 'https://fonts.gstatic.com/s/oxygen/v14/2sDfZG1Wl4LcnbuKjk0g.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=2sDfZG1Wl4LcnbuKjk0h&skey=65a128e59aae3226&v=v14#Oxygen',
                'woff2' => 'https://fonts.gstatic.com/s/oxygen/v14/2sDfZG1Wl4LcnbuKjk0m.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/oxygen/v14/2sDfZG1Wl4LcnbuKjk0i.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/oxygen/v14/2sDfZG1Wl4LcnbuKjk0j.ttf',
            ),
            'Oxygen Mono'               => array(
                'woff'  => 'https://fonts.gstatic.com/s/oxygenmono/v11/h0GsssGg9FxgDgCjLeAd7hjYx-g.woff',
                'eot'   => 'https://fonts.gstatic.com/s/oxygenmono/v11/h0GsssGg9FxgDgCjLeAd7hjYx-o.eot',
                'woff2' => 'https://fonts.gstatic.com/s/oxygenmono/v11/h0GsssGg9FxgDgCjLeAd7hjYx-4.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=h0GsssGg9FxgDgCjLeAd7hjYx-k&skey=464e9f9167c9e76a&v=v11#OxygenMono',
                'ttf'   => 'https://fonts.gstatic.com/s/oxygenmono/v11/h0GsssGg9FxgDgCjLeAd7hjYx-s.ttf',
            ),
            'Princess Sofia'            => array(
                'eot'   => 'https://fonts.gstatic.com/s/princesssofia/v19/qWczB6yguIb8DZ_GXZst16n7GSz8kjA.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/princesssofia/v19/qWczB6yguIb8DZ_GXZst16n7GSz8kjE.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/princesssofia/v19/qWczB6yguIb8DZ_GXZst16n7GSz8kjQ.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=qWczB6yguIb8DZ_GXZst16n7GSz8kjM&skey=c12de19c7965de10&v=v19#PrincessSofia',
                'woff'  => 'https://fonts.gstatic.com/s/princesssofia/v19/qWczB6yguIb8DZ_GXZst16n7GSz8kjI.woff',
            ),
            'Prociono'                  => array(
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=r05YGLlR-KxAf9GGO_uuwjA&skey=f1ab602d48b8a5f7&v=v20#Prociono',
                'woff'  => 'https://fonts.gstatic.com/s/prociono/v20/r05YGLlR-KxAf9GGO_uuwjE.woff',
                'woff2' => 'https://fonts.gstatic.com/s/prociono/v20/r05YGLlR-KxAf9GGO_uuwjc.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/prociono/v20/r05YGLlR-KxAf9GGO_uuwjM.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/prociono/v20/r05YGLlR-KxAf9GGO_uuwjI.ttf',
            ),
            'Prompt'                    => array(
                'eot'   => 'https://fonts.gstatic.com/s/prompt/v9/-W__XJnvUD7dzB2KYNoZ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/prompt/v9/-W__XJnvUD7dzB2KYNod.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=-W__XJnvUD7dzB2KYNoa&skey=154c4e4e997e9cb&v=v9#Prompt',
                'woff'  => 'https://fonts.gstatic.com/s/prompt/v9/-W__XJnvUD7dzB2KYNob.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/prompt/v9/-W__XJnvUD7dzB2KYNoY.ttf',
            ),
            'Prosto One'                => array(
                'woff'  => 'https://fonts.gstatic.com/s/prostoone/v15/OpNJno4VhNfK-RgpwWWxli1VXQ.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/prostoone/v15/OpNJno4VhNfK-RgpwWWxli1VXg.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=OpNJno4VhNfK-RgpwWWxli1VXA&skey=dd4f849bff091329&v=v15#ProstoOne',
                'eot'   => 'https://fonts.gstatic.com/s/prostoone/v15/OpNJno4VhNfK-RgpwWWxli1VXw.eot',
                'woff2' => 'https://fonts.gstatic.com/s/prostoone/v15/OpNJno4VhNfK-RgpwWWxli1VWw.woff2',
            ),
            'Proza Libre'               => array(
                'woff'  => 'https://fonts.gstatic.com/s/prozalibre/v5/LYjGdGHgj0k1DIQRyUEyyEoodNw.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/prozalibre/v5/LYjGdGHgj0k1DIQRyUEyyEoodN8.ttf',
                'eot'   => 'https://fonts.gstatic.com/s/prozalibre/v5/LYjGdGHgj0k1DIQRyUEyyEoodN4.eot',
                'woff2' => 'https://fonts.gstatic.com/s/prozalibre/v5/LYjGdGHgj0k1DIQRyUEyyEoodNo.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=LYjGdGHgj0k1DIQRyUEyyEoodN0&skey=c693a39898a09712&v=v5#ProzaLibre',
            ),
            'Quicksand'                 => array(
                'eot'   => 'https://fonts.gstatic.com/s/quicksand/v28/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o58a-xg.eot',
                'woff2' => 'https://fonts.gstatic.com/s/quicksand/v28/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o58a-wg.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/quicksand/v28/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o58a-xw.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/quicksand/v28/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o58a-xA.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o58a-xQ&skey=c01f11fa5439d932&v=v28#Quicksand',
            ),
            'Quintessential'            => array(
                'ttf'   => 'https://fonts.gstatic.com/s/quintessential/v18/fdNn9sOGq31Yjnh3qWU14Ddtjb53Qb0.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/quintessential/v18/fdNn9sOGq31Yjnh3qWU14Ddtjb53Qb4.woff',
                'eot'   => 'https://fonts.gstatic.com/s/quintessential/v18/fdNn9sOGq31Yjnh3qWU14Ddtjb53Qbw.eot',
                'woff2' => 'https://fonts.gstatic.com/s/quintessential/v18/fdNn9sOGq31Yjnh3qWU14Ddtjb53Qbg.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=fdNn9sOGq31Yjnh3qWU14Ddtjb53Qb8&skey=69a7a147bd395e2d&v=v18#Quintessential',
            ),
            'Qwigley'                   => array(
                'woff2' => 'https://fonts.gstatic.com/s/qwigley/v14/1cXzaU3UGJb5tGoCiVtmig.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/qwigley/v14/1cXzaU3UGJb5tGoCiVtmjg.eot',
                'woff'  => 'https://fonts.gstatic.com/s/qwigley/v14/1cXzaU3UGJb5tGoCiVtmjA.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=1cXzaU3UGJb5tGoCiVtmjQ&skey=556bf49db578a148&v=v14#Qwigley',
                'ttf'   => 'https://fonts.gstatic.com/s/qwigley/v14/1cXzaU3UGJb5tGoCiVtmjw.ttf',
            ),
            'Racing Sans One'           => array(
                'ttf'   => 'https://fonts.gstatic.com/s/racingsansone/v11/sykr-yRtm7EvTrXNxkv5jfKKyDCAKHDi.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=sykr-yRtm7EvTrXNxkv5jfKKyDCAKHDg&skey=c54fc5912484ccc5&v=v11#RacingSansOne',
                'woff2' => 'https://fonts.gstatic.com/s/racingsansone/v11/sykr-yRtm7EvTrXNxkv5jfKKyDCAKHDn.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/racingsansone/v11/sykr-yRtm7EvTrXNxkv5jfKKyDCAKHDj.eot',
                'woff'  => 'https://fonts.gstatic.com/s/racingsansone/v11/sykr-yRtm7EvTrXNxkv5jfKKyDCAKHDh.woff',
            ),
            'Radley'                    => array(
                'woff'  => 'https://fonts.gstatic.com/s/radley/v18/LYjDdGzinEIjCN1NpwND.woff',
                'eot'   => 'https://fonts.gstatic.com/s/radley/v18/LYjDdGzinEIjCN1NpwNB.eot',
                'woff2' => 'https://fonts.gstatic.com/s/radley/v18/LYjDdGzinEIjCN1NpwNF.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=LYjDdGzinEIjCN1NpwNC&skey=e57d4c4ee339b3e9&v=v18#Radley',
                'ttf'   => 'https://fonts.gstatic.com/s/radley/v18/LYjDdGzinEIjCN1NpwNA.ttf',
            ),
            'Rajdhani'                  => array(
                'ttf'   => 'https://fonts.gstatic.com/s/rajdhani/v14/LDIxapCSOBg7S-QT7p4HM-M.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/rajdhani/v14/LDIxapCSOBg7S-QT7p4HM-A.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=LDIxapCSOBg7S-QT7p4HM-E&skey=2a58cb2a05429b83&v=v14#Rajdhani',
                'eot'   => 'https://fonts.gstatic.com/s/rajdhani/v14/LDIxapCSOBg7S-QT7p4HM-I.eot',
                'woff2' => 'https://fonts.gstatic.com/s/rajdhani/v14/LDIxapCSOBg7S-QT7p4HM-Y.woff2',
            ),
            'Rakkas'                    => array(
                'eot'   => 'https://fonts.gstatic.com/s/rakkas/v15/Qw3cZQlNHiblL3jPkdFK.eot',
                'woff'  => 'https://fonts.gstatic.com/s/rakkas/v15/Qw3cZQlNHiblL3jPkdFI.woff',
                'woff2' => 'https://fonts.gstatic.com/s/rakkas/v15/Qw3cZQlNHiblL3jPkdFO.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=Qw3cZQlNHiblL3jPkdFJ&skey=838fd7946900648&v=v15#Rakkas',
                'ttf'   => 'https://fonts.gstatic.com/s/rakkas/v15/Qw3cZQlNHiblL3jPkdFL.ttf',
            ),
            'Raleway'                   => array(
                'eot'   => 'https://fonts.gstatic.com/s/raleway/v26/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrU.eot',
                'woff'  => 'https://fonts.gstatic.com/s/raleway/v26/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrc.woff',
                'woff2' => 'https://fonts.gstatic.com/s/raleway/v26/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrE.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrY&skey=30a27f2564731c64&v=v26#Raleway',
                'ttf'   => 'https://fonts.gstatic.com/s/raleway/v26/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrQ.ttf',
            ),
            'Raleway Dots'              => array(
                'eot'   => 'https://fonts.gstatic.com/s/ralewaydots/v12/6NUR8FifJg6AfQvzpshgwJ8UzvVA.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=6NUR8FifJg6AfQvzpshgwJ8UzvVD&skey=cc3e6aa20688efe&v=v12#RalewayDots',
                'woff'  => 'https://fonts.gstatic.com/s/ralewaydots/v12/6NUR8FifJg6AfQvzpshgwJ8UzvVC.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/ralewaydots/v12/6NUR8FifJg6AfQvzpshgwJ8UzvVB.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/ralewaydots/v12/6NUR8FifJg6AfQvzpshgwJ8UzvVE.woff2',
            ),
            'Ramabhadra'                => array(
                'woff2' => 'https://fonts.gstatic.com/s/ramabhadra/v13/EYq2maBOwqRW9P1SQ83LShRMXg.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/ramabhadra/v13/EYq2maBOwqRW9P1SQ83LShRMWg.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=EYq2maBOwqRW9P1SQ83LShRMWQ&skey=e9d5795f78cdacfa&v=v13#Ramabhadra',
                'ttf'   => 'https://fonts.gstatic.com/s/ramabhadra/v13/EYq2maBOwqRW9P1SQ83LShRMWw.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/ramabhadra/v13/EYq2maBOwqRW9P1SQ83LShRMWA.woff',
            ),
            'Ramaraja'                  => array(
                'woff2' => 'https://fonts.gstatic.com/s/ramaraja/v13/SlGTmQearpYAYG1CACIjoHE.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/ramaraja/v13/SlGTmQearpYAYG1CACIjoHc.woff',
                'eot'   => 'https://fonts.gstatic.com/s/ramaraja/v13/SlGTmQearpYAYG1CACIjoHU.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=SlGTmQearpYAYG1CACIjoHY&skey=f83b7da96b6fa9d5&v=v13#Ramaraja',
                'ttf'   => 'https://fonts.gstatic.com/s/ramaraja/v13/SlGTmQearpYAYG1CACIjoHQ.ttf',
            ),
            'Rosarivo'                  => array(
                'eot'   => 'https://fonts.gstatic.com/s/rosarivo/v18/PlI-Fl2lO6N9f8HaNDeF0H0.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/rosarivo/v18/PlI-Fl2lO6N9f8HaNDeF0Hw.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/rosarivo/v18/PlI-Fl2lO6N9f8HaNDeF0H8.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=PlI-Fl2lO6N9f8HaNDeF0H4&skey=ac6102bdca509a99&v=v18#Rosarivo',
                'woff2' => 'https://fonts.gstatic.com/s/rosarivo/v18/PlI-Fl2lO6N9f8HaNDeF0Hk.woff2',
            ),
            'Revalia'                   => array(
                'eot'   => 'https://fonts.gstatic.com/s/revalia/v18/WwkexPimBE2-4ZPESV3kMQ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/revalia/v18/WwkexPimBE2-4ZPESV3kNQ.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/revalia/v18/WwkexPimBE2-4ZPESV3kMA.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/revalia/v18/WwkexPimBE2-4ZPESV3kMw.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=WwkexPimBE2-4ZPESV3kMg&skey=bbf65c76529e0aac&v=v18#Revalia',
            ),
            'Siemreap'                  => array(
                'eot'   => 'https://fonts.gstatic.com/s/siemreap/v15/Gg82N5oFbgLvHAfNl1YXlgo.eot',
                'woff2' => 'https://fonts.gstatic.com/s/siemreap/v15/Gg82N5oFbgLvHAfNl1YXlg4.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/siemreap/v15/Gg82N5oFbgLvHAfNl1YXlgs.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/siemreap/v15/Gg82N5oFbgLvHAfNl1YXlgg.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=Gg82N5oFbgLvHAfNl1YXlgk&skey=b6efc4718dc363e9&v=v15#Siemreap',
            ),
            'Sigmar One'                => array(
                'eot'   => 'https://fonts.gstatic.com/s/sigmarone/v15/co3DmWZ8kjZuErj9Ta3do6Tpog.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/sigmarone/v15/co3DmWZ8kjZuErj9Ta3do6Tpow.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=co3DmWZ8kjZuErj9Ta3do6TpoQ&skey=1faaf69a761e7c1&v=v15#SigmarOne',
                'woff2' => 'https://fonts.gstatic.com/s/sigmarone/v15/co3DmWZ8kjZuErj9Ta3do6Tppg.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/sigmarone/v15/co3DmWZ8kjZuErj9Ta3do6TpoA.woff',
            ),
            'Signika'                   => array(
                'woff'  => 'https://fonts.gstatic.com/s/signika/v18/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHKbBjMg.woff',
                'woff2' => 'https://fonts.gstatic.com/s/signika/v18/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHKbBjM4.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/signika/v18/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHKbBjMo.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHKbBjMk&skey=2df7b3f7f6d8a32a&v=v18#Signika',
                'ttf'   => 'https://fonts.gstatic.com/s/signika/v18/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHKbBjMs.ttf',
            ),
            'Signika Negative'          => array(
                'ttf'   => 'https://fonts.gstatic.com/s/signikanegative/v18/E21x_cfngu7HiRpPX3ZpNE4kY5zKSPmJXkF0VDD2RAqnS43rvdw.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=E21x_cfngu7HiRpPX3ZpNE4kY5zKSPmJXkF0VDD2RAqnS43rvd4&skey=72460f8866ebf5b&v=v18#SignikaNegative',
                'eot'   => 'https://fonts.gstatic.com/s/signikanegative/v18/E21x_cfngu7HiRpPX3ZpNE4kY5zKSPmJXkF0VDD2RAqnS43rvd0.eot',
                'woff2' => 'https://fonts.gstatic.com/s/signikanegative/v18/E21x_cfngu7HiRpPX3ZpNE4kY5zKSPmJXkF0VDD2RAqnS43rvdk.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/signikanegative/v18/E21x_cfngu7HiRpPX3ZpNE4kY5zKSPmJXkF0VDD2RAqnS43rvd8.woff',
            ),
            'Simonetta'                 => array(
                'eot'   => 'https://fonts.gstatic.com/s/simonetta/v21/x3dickHVYrCU5BU15c4xe_oH.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=x3dickHVYrCU5BU15c4xe_oE&skey=d750687bc3bb71a&v=v21#Simonetta',
                'ttf'   => 'https://fonts.gstatic.com/s/simonetta/v21/x3dickHVYrCU5BU15c4xe_oG.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/simonetta/v21/x3dickHVYrCU5BU15c4xe_oD.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/simonetta/v21/x3dickHVYrCU5BU15c4xe_oF.woff',
            ),
            'Tajawal'                   => array(
                'eot'   => 'https://fonts.gstatic.com/s/tajawal/v8/Iura6YBj_oCad4k1nzGBDw.eot',
                'woff'  => 'https://fonts.gstatic.com/s/tajawal/v8/Iura6YBj_oCad4k1nzGBDQ.woff',
                'woff2' => 'https://fonts.gstatic.com/s/tajawal/v8/Iura6YBj_oCad4k1nzGBCw.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=Iura6YBj_oCad4k1nzGBDA&skey=549d92590736b326&v=v8#Tajawal',
                'ttf'   => 'https://fonts.gstatic.com/s/tajawal/v8/Iura6YBj_oCad4k1nzGBDg.ttf',
            ),
            'Tangerine'                 => array(
                'woff2' => 'https://fonts.gstatic.com/s/tangerine/v15/IurY6Y5j_oScZZow4VOxCZZM.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/tangerine/v15/IurY6Y5j_oScZZow4VOxCZZK.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/tangerine/v15/IurY6Y5j_oScZZow4VOxCZZJ.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=IurY6Y5j_oScZZow4VOxCZZL&skey=7b78e1b6f929768b&v=v15#Tangerine',
                'eot'   => 'https://fonts.gstatic.com/s/tangerine/v15/IurY6Y5j_oScZZow4VOxCZZI.eot',
            ),
            'Taprom'                    => array(
                'eot'   => 'https://fonts.gstatic.com/s/taprom/v25/UcCn3F82JHycULb1RCMy.eot',
                'woff'  => 'https://fonts.gstatic.com/s/taprom/v25/UcCn3F82JHycULb1RCMw.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/taprom/v25/UcCn3F82JHycULb1RCMz.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/taprom/v25/UcCn3F82JHycULb1RCM2.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=UcCn3F82JHycULb1RCMx&skey=859dd742e3c12a2a&v=v25#Taprom',
            ),
            'Tauri'                     => array(
                'eot'   => 'https://fonts.gstatic.com/s/tauri/v14/TwMA-IISS0AM3LpSUnA.eot',
                'woff'  => 'https://fonts.gstatic.com/s/tauri/v14/TwMA-IISS0AM3LpSUnI.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=TwMA-IISS0AM3LpSUnM&skey=a80ecb7544e95b0b&v=v14#Tauri',
                'ttf'   => 'https://fonts.gstatic.com/s/tauri/v14/TwMA-IISS0AM3LpSUnE.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/tauri/v14/TwMA-IISS0AM3LpSUnQ.woff2',
            ),
            'Taviraj'                   => array(
                'eot'   => 'https://fonts.gstatic.com/s/taviraj/v9/ahcZv8Cj3ylylTXzTOkrVg.eot',
                'woff'  => 'https://fonts.gstatic.com/s/taviraj/v9/ahcZv8Cj3ylylTXzTOkrVA.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=ahcZv8Cj3ylylTXzTOkrVQ&skey=e380adc86ebdb4d0&v=v9#Taviraj',
                'ttf'   => 'https://fonts.gstatic.com/s/taviraj/v9/ahcZv8Cj3ylylTXzTOkrVw.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/taviraj/v9/ahcZv8Cj3ylylTXzTOkrUg.woff2',
            ),
            'Teko'                      => array(
                'eot'   => 'https://fonts.gstatic.com/s/teko/v14/LYjNdG7kmE0gfaN9oQ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/teko/v14/LYjNdG7kmE0gfaN9pQ.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/teko/v14/LYjNdG7kmE0gfaN9oA.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/teko/v14/LYjNdG7kmE0gfaN9ow.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=LYjNdG7kmE0gfaN9og&skey=f42f6a86f3e5e4b1&v=v14#Teko',
            ),
            'Telex'                     => array(
                'woff2' => 'https://fonts.gstatic.com/s/telex/v12/ieVw2Y1fKWmIO-fUDVs.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=ieVw2Y1fKWmIO-fUDVw&skey=f563425e95f7a3e2&v=v12#Telex',
                'eot'   => 'https://fonts.gstatic.com/s/telex/v12/ieVw2Y1fKWmIO-fUDV8.eot',
                'woff'  => 'https://fonts.gstatic.com/s/telex/v12/ieVw2Y1fKWmIO-fUDV0.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/telex/v12/ieVw2Y1fKWmIO-fUDV4.ttf',
            ),
            'Tenali Ramakrishna'        => array(
                'woff'  => 'https://fonts.gstatic.com/s/tenaliramakrishna/v10/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-ML5_t.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-ML5_s&skey=4930e67a756ab02f&v=v10#TenaliRamakrishna',
                'eot'   => 'https://fonts.gstatic.com/s/tenaliramakrishna/v10/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-ML5_v.eot',
                'ttf'   => 'https://fonts.gstatic.com/s/tenaliramakrishna/v10/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-ML5_u.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/tenaliramakrishna/v10/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-ML5_r.woff2',
            ),
            'Tenor Sans'                => array(
                'ttf'   => 'https://fonts.gstatic.com/s/tenorsans/v15/bx6ANxqUneKx06UkIXISn3V4Dw.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/tenorsans/v15/bx6ANxqUneKx06UkIXISn3V4Cg.woff2',
                'eot'   => 'https://fonts.gstatic.com/s/tenorsans/v15/bx6ANxqUneKx06UkIXISn3V4Dg.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=bx6ANxqUneKx06UkIXISn3V4DQ&skey=9e159c41209dbf49&v=v15#TenorSans',
                'woff'  => 'https://fonts.gstatic.com/s/tenorsans/v15/bx6ANxqUneKx06UkIXISn3V4DA.woff',
            ),
            'Text Me One'               => array(
                'eot'   => 'https://fonts.gstatic.com/s/textmeone/v18/i7dOIFdlayuLUvgoFvHQFVZbYFM.eot',
                'woff'  => 'https://fonts.gstatic.com/s/textmeone/v18/i7dOIFdlayuLUvgoFvHQFVZbYFE.woff',
                'woff2' => 'https://fonts.gstatic.com/s/textmeone/v18/i7dOIFdlayuLUvgoFvHQFVZbYFc.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/textmeone/v18/i7dOIFdlayuLUvgoFvHQFVZbYFI.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=i7dOIFdlayuLUvgoFvHQFVZbYFA&skey=e4462b563ebfbe6&v=v18#TextMeOne',
            ),
            'The Girl Next Door'        => array(
                'woff'  => 'https://fonts.gstatic.com/s/thegirlnextdoor/v16/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCY4ULF8.woff',
                'eot'   => 'https://fonts.gstatic.com/s/thegirlnextdoor/v16/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCY4ULF-.eot',
                'woff2' => 'https://fonts.gstatic.com/s/thegirlnextdoor/v16/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCY4ULF6.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/thegirlnextdoor/v16/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCY4ULF_.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCY4ULF9&skey=bb61dfb09aee2010&v=v16#TheGirlNextDoor',
            ),
            'Tienne'                    => array(
                'woff2' => 'https://fonts.gstatic.com/s/tienne/v18/AYCKpX7pe9YCRP07l0nG.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/tienne/v18/AYCKpX7pe9YCRP07l0nD.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=AYCKpX7pe9YCRP07l0nB&skey=80ed6e66d365b35a&v=v18#Tienne',
                'woff'  => 'https://fonts.gstatic.com/s/tienne/v18/AYCKpX7pe9YCRP07l0nA.woff',
                'eot'   => 'https://fonts.gstatic.com/s/tienne/v18/AYCKpX7pe9YCRP07l0nC.eot',
            ),
            'Tillana'                   => array(
                'woff2' => 'https://fonts.gstatic.com/s/tillana/v9/VuJxdNvf35P4qJ1OSKHdOQ.woff2',
                'ttf'   => 'https://fonts.gstatic.com/s/tillana/v9/VuJxdNvf35P4qJ1OSKHdPA.ttf',
                'woff'  => 'https://fonts.gstatic.com/s/tillana/v9/VuJxdNvf35P4qJ1OSKHdPw.woff',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=VuJxdNvf35P4qJ1OSKHdPg&skey=ca2cb923082f4f9a&v=v9#Tillana',
                'eot'   => 'https://fonts.gstatic.com/s/tillana/v9/VuJxdNvf35P4qJ1OSKHdPQ.eot',
            ),
            'Timmana'                   => array(
                'eot'   => 'https://fonts.gstatic.com/s/timmana/v10/6xKvdShfL9yK-rvpOmzRLQ.eot',
                'woff2' => 'https://fonts.gstatic.com/s/timmana/v10/6xKvdShfL9yK-rvpOmzRKQ.woff2',
                'woff'  => 'https://fonts.gstatic.com/s/timmana/v10/6xKvdShfL9yK-rvpOmzRLw.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/timmana/v10/6xKvdShfL9yK-rvpOmzRLA.ttf',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=6xKvdShfL9yK-rvpOmzRLg&skey=909c473ed6ecde4d&v=v10#Timmana',
            ),
            'Tinos'                     => array(
                'eot'   => 'https://fonts.gstatic.com/s/tinos/v23/buE4poGnedXvwjX7fmA.eot',
                'woff'  => 'https://fonts.gstatic.com/s/tinos/v23/buE4poGnedXvwjX7fmI.woff',
                'woff2' => 'https://fonts.gstatic.com/s/tinos/v23/buE4poGnedXvwjX7fmQ.woff2',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=buE4poGnedXvwjX7fmM&skey=c8b6aa82b57934a&v=v23#Tinos',
                'ttf'   => 'https://fonts.gstatic.com/s/tinos/v23/buE4poGnedXvwjX7fmE.ttf',
            ),
            'Titan One'                 => array(
                'eot'   => 'https://fonts.gstatic.com/s/titanone/v11/mFTzWbsGxbbS_J5cQcjClDgi.eot',
                'svg'   => 'https://fonts.gstatic.com/l/font?kit=mFTzWbsGxbbS_J5cQcjClDgh&skey=fec1aaa79fef5720&v=v11#TitanOne',
                'woff'  => 'https://fonts.gstatic.com/s/titanone/v11/mFTzWbsGxbbS_J5cQcjClDgg.woff',
                'ttf'   => 'https://fonts.gstatic.com/s/titanone/v11/mFTzWbsGxbbS_J5cQcjClDgj.ttf',
                'woff2' => 'https://fonts.gstatic.com/s/titanone/v11/mFTzWbsGxbbS_J5cQcjClDgm.woff2',
            ),
        );
	}
	function form($instance){
		$defaults=array('Total_Soft_Cal'=>'');
		$instance=wp_parse_args((array)$instance,$defaults);
		$Calendar=$instance['Total_Soft_Cal'];
		?>
        <div>
            <p>
                Select Calendar:
                <select name="<?php echo esc_html($this->get_field_name('Total_Soft_Cal')); ?>" class="widefat">
        			<?php
        			global $wpdb;
        			$table_name4 = $wpdb->prefix."totalsoft_cal_types";
        			$Total_Soft_Cal=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id > %d",0),ARRAY_A);
        			foreach($Total_Soft_Cal as $Total_Soft_Cal1){
                        echo sprintf('
                            <option value="%1$s">%2$s</option> 
                            ',
                            esc_attr($Total_Soft_Cal1["id"]),
                            esc_html($Total_Soft_Cal1["TotalSoftCal_Name"])
                        );
                    } ?>
                </select>
            </p>
        </div>
		<?php
	}
  public function tsp_get_font_face($font_name){
    if ( array_key_exists( $font_name, $this->ts_calendar_fonts ) ) {
        return sprintf(
            '
              @font-face {
                font-family: "%1$s";
                font-style: normal;
                font-weight: 400;
                src: url("%2$s"); 
                src: url("%3$s") format("embedded-opentype"), 
                     url("%4$s") format("woff2"), 
                     url("%5$s") format("woff"), 
                     url("%6$s") format("truetype"), 
                     url("%7$s") format("svg");
              }
            ',
            esc_attr( $font_name ),
            array_key_exists( 'eot', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['eot'] ) : '',
            array_key_exists( 'eot', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['eot'] ) : '',
            array_key_exists( 'woff2', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['woff2'] ) : '',
            array_key_exists( 'woff', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['woff'] ) : '',
            array_key_exists( 'ttf', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['ttf'] ) : '',
            array_key_exists( 'svg', $this->ts_calendar_fonts[ $font_name ] ) ? esc_url( $this->ts_calendar_fonts[ $font_name ]['svg'] ) : ''
        );
    } else {
        return false;
    }
  }
  function widget($args,$instance){
    function ts_calendar_wp_kses( $tags, $context ) {
        if ( 'post' === $context ) {
            $tags['iframe'] = array(
                'src'             => true,
                'height'          => true,
                'width'           => true,
                'frameborder'     => true,
                'allowfullscreen' => true,
                'webkitAllowFullScreen' => true,
                'mozallowfullscreen' => true,
                'class' => true
            );
        }
        return $tags;
    }
    
    add_filter( 'wp_kses_allowed_html', 'ts_calendar_wp_kses', 10, 2 );

		extract($args);
		require_once(dirname(__FILE__).'/Total-Soft-Calendar-Data.php');
		$Total_Soft_Cal= empty($instance['Total_Soft_Cal']) ? '' : $instance['Total_Soft_Cal'];
		global $wpdb;
		$table_name2 =$wpdb->prefix."totalsoft_cal_ids";
		$table_name3 =$wpdb->prefix."totalsoft_cal_events";
		$table_name6 =$wpdb->prefix."totalsoft_cal_events_p2";
		$table_name10=$wpdb->prefix."totalsoft_cal_events_p3";
		$table_name4 =$wpdb->prefix."totalsoft_cal_types";
		$table_name1 =$wpdb->prefix."totalsoft_cal_1";
		$table_name5 =$wpdb->prefix."totalsoft_cal_2";
		$table_name7 =$wpdb->prefix."totalsoft_cal_3";
		$table_name9 =$wpdb->prefix."totalsoft_cal_4";
		$table_name8 =$wpdb->prefix."totalsoft_cal_part";
		$table_name01=$wpdb->prefix."totalsoft_cal_p1";
		$table_name02=$wpdb->prefix."totalsoft_cal_p2";
		$table_name03=$wpdb->prefix."totalsoft_cal_p3";
		$table_name04=$wpdb->prefix."totalsoft_cal_p4";
		$table_name08=$wpdb->prefix."totalsoft_cal_part1";
		$TotalSoftCal_Type=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d",$Total_Soft_Cal));
		$ts_calendar_fonts_response = "";
        if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Event Calendar'){
			$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE TotalSoftCal_ID = %d",$Total_Soft_Cal));
            $ts_calendar_fonts_response .= sprintf(
                '
                %1$s
                %2$s
                %3$s
                ',
                isset($TotalSoftCal_Par[0]->TotalSoftCal_HFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal_HFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_HFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_HFF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal_WFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal_WFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_WFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_WFF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal_DFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal_DFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_DFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal_DFF) : "",
            );

		}else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Simple Calendar'){
			$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftCal_ID = %d",$Total_Soft_Cal));
            $ts_calendar_fonts_response .= sprintf(
                '
                %1$s
                %2$s
                %3$s
                ',
                isset($TotalSoftCal_Par[0]->TotalSoftCal2_MFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal2_MFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_MFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_MFF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal2_WFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal2_WFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_WFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_WFF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFF) &&  $TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFF) : "",
            );
		}else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Flexible Calendar'){
			$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftCal_ID = %d",$Total_Soft_Cal));
            $ts_calendar_fonts_response .= sprintf(
                '
                %1$s
                %2$s
                %3$s
                ',
                isset($TotalSoftCal_Par[0]->TotalSoftCal3_H_FF) &&  $TotalSoftCal_Par[0]->TotalSoftCal3_H_FF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_H_FF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_H_FF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal3_WD_FF) &&  $TotalSoftCal_Par[0]->TotalSoftCal3_WD_FF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_WD_FF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_WD_FF) : "",
                isset($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FF) &&  $TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FF != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FF) !== false ? $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FF) : "",
            );
		}else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='TimeLine Calendar'){
			$TotalSoftCal_Par=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftCal_ID = %d",$Total_Soft_Cal));
            if (isset($TotalSoftCal_Par[0]->TotalSoftCal4_11) &&  $TotalSoftCal_Par[0]->TotalSoftCal4_11 != "" && $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal4_11) !== false) {
                $ts_calendar_fonts_response .= $this->tsp_get_font_face($TotalSoftCal_Par[0]->TotalSoftCal4_11);
            }
		}
		$TotalSoftCal_Part   =$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftCal_ID = %s",$Total_Soft_Cal));
		$Total_Soft_CalEvents=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_Cal));
		echo $before_widget;
        wp_register_style("ts_calendar_styles", plugins_url('../CSS/totalsoft.css',__FILE__), []);
        wp_enqueue_style("ts_calendar_styles");
        wp_add_inline_style("ts_calendar_styles", $ts_calendar_fonts_response);
		if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Event Calendar'){ ?>
        <style type="text/css">
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                border: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BW);?>px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BStyle);?> <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BCol);?>;
                position: relative;
                z-index: 0;
            }
            <?php if($TotalSoftCal_Part[0]->TotalSoftCal_06 == '') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0px 0px 30px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0px 0px 30px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0px 0px 30px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }
            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type2') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type3') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type4') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type5') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                right: 10px;
                left: auto;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type6') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 25px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                transform: rotate(-8deg);
                -moz-transform: rotate(-8deg);
                -webkit-transform: rotate(-8deg);
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(8deg);
                -moz-transform: rotate(8deg);
                -webkit-transform: rotate(8deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type7') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                top: 50%;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type8') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                top: 0;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type9') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?> inset;
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                top: 10px;
                bottom: 10px;
                left: 0;
                right: 0;
                border-radius: 100px / 10px;
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type10') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:before, .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                position: absolute;
                content: "";
                box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                top: 40px;
                left: 20px;
                bottom: 50px;
                width: 15%;
                z-index: -1;
                -webkit-transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                transform: rotate(-3deg);
            }

            .monthly<?php echo esc_html($Total_Soft_Cal); ?>:after {
                -webkit-transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                transform: rotate(3deg);
                right: 20px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type11') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type12') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type13') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type14') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type15') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type16') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'type17') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -moz-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
                -webkit-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BSCol);?>;
            }

            <?php } else if($TotalSoftCal_Part[0]->TotalSoftCal_06 == 'none') { ?>
            .monthly<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            <?php }?>
            .desc {
                max-width: 250px;
                text-align: left;
                font-size: 14px;
                padding-top: 30px;
                line-height: 1.4em;
            }

            .resize {
                background: #222;
                display: inline-block;
                padding: 6px 15px;
                border-radius: 22px;
                font-size: 13px;
            }

            @media (max-height: 700px) {
                .sticky {
                    position: relative;
                }
            }

            @media (max-width: 600px) {
                .resize {
                    display: none;
                }
            }

            /* Contains title & nav */
            .monthly-header<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                text-align: center;
                padding: 10px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HBgCol);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HCol);?>;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }

            .monthly-header<?php echo esc_html($Total_Soft_Cal); ?> .monthly-cal:before {
                font-family: FontAwesome;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HCol);?>;
                <?php if ($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '1') { ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '2'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '3'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '4'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '5'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '6'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '7'){ ?> content: "";
                <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal_BackIconType == '8'){ ?> content: "";
                <?php } ?>
            }

            .monthly-header<?php echo esc_html($Total_Soft_Cal); ?> .monthly-cal:after {
                border: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HBgCol);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HCol);?>;
            }

            .monthly-header<?php echo esc_html($Total_Soft_Cal); ?> .monthly-cal div {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HBgCol);?>;
            }

            .monthly-header-title<?php echo esc_html($Total_Soft_Cal); ?> {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HFF);?>;
            }

            .monthly-day-title-wrap<?php echo esc_html($Total_Soft_Cal); ?> {
                display: table;
                table-layout: fixed;
                width: 100%;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_WBgCol);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_WCol);?>;
                border-bottom: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_LAW);?>px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_LAWS);?> <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_LAWC);?>;
            }

            .monthly-day-title-wrap<?php echo esc_html($Total_Soft_Cal); ?> div {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_WFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_WFF);?>;
            }

            /* Calendar Days */
            .monthly-day<?php echo esc_html($Total_Soft_Cal); ?>, .monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 0 <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GW);?>px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GrCol);?> !important;
                -moz-box-shadow: 0 0 0 <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GW);?>px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GrCol);?> !important;
                -webkit-box-shadow: 0 0 0 <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GW);?>px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_GrCol);?> !important;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_DBgCol);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_DCol);?> !important;
            }

            /* Days that are part of previous or next month */
            .monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?> {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_BgCol);?>;
            }

            .monthly-day-event<?php echo esc_html($Total_Soft_Cal); ?> > .monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?> {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_DFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_DFF);?>;
            <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_NumPos);?>: 2 px;
            <?php if ($TotalSoftCal_Par[0]->TotalSoftCal_NumPos == "center") { ?> left: 43%;
            <?php  } ?>
            }

            .monthly-today<?php echo esc_html($Total_Soft_Cal); ?> .monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?> {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_TCol);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_TNBgCol);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_TFS);?>px;
            <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_NumPos);?>: 2 px;
            <?php if ($TotalSoftCal_Par[0]->TotalSoftCal_NumPos == "center") { ?> left: 41%;
            <?php  } ?>
            }

            .monthly-today<?php echo esc_html($Total_Soft_Cal); ?> {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_TBgCol);?>;
            }

            /* Increase font & spacing over larger size */
            @media (min-width: 400px) {
                .monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?> {
                    top: 5px;
                <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_NumPos);?>: 5 px;
                    font-size: 13px;
                }
            }

            .TotalSoftRefresh<?php echo esc_html($Total_Soft_Cal); ?> {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_RefIcSize);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_RefIcCol);?>;
            }

            .TotalSoftArrow<?php echo esc_html($Total_Soft_Cal); ?> {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_ArrowSize);?>px !important;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_ArrowCol);?>;
            }

            .monthly-day<?php echo esc_html($Total_Soft_Cal); ?>:hover {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HovBgCol);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_HovCol);?> !important;
                border-bottom: 0px !important;
            }

            .TotalSoftcalEvent_1_Media<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_09);?>%;
                height: auto;
                display: inline !important;
                margin: 0 auto !important;
            }

            .TotalSoftcalEvent_1_Mediadiv<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_09);?>%;
                position: relative;
                display: inline-block;
            }

            .TotalSoftcalEvent_1_Mediadiv<?php echo esc_html($Total_Soft_Cal); ?>:after {
                padding-top: 56.25% !important;
                display: block;
                content: '';
            }

            .TotalSoftcalEvent_1_Mediaiframe {
                width: 100% !important;
                height: 100% !important;
                left: 0;
                position: absolute;
            }

            .monthly-event-list<?php echo esc_html($Total_Soft_Cal); ?> .listed-event-title<?php echo esc_html($Total_Soft_Cal); ?> {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_03);?> !important;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>px !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> !important;
                text-align: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_04);?> !important;
            }

            .monthly-event-list<?php echo esc_html($Total_Soft_Cal); ?> .listed-event-title<?php echo esc_html($Total_Soft_Cal); ?>:hover {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_03);?> !important;
            }

            .monthly-day<?php echo esc_html($Total_Soft_Cal); ?> .monthly-event-indicator {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_03);?> !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> !important;
            }

            @media screen and (max-width: 400px) {
                .TotalSoftcalEvent_1_Media<?php echo esc_html($Total_Soft_Cal); ?>, .TotalSoftcalEvent_1_Mediadiv<?php echo esc_html($Total_Soft_Cal); ?> {
                    width: 100% !important;
                }
            }

            @media screen and (max-width: 700px) {
                .TotalSoftcalEvent_1_Media<?php echo esc_html($Total_Soft_Cal); ?>, .TotalSoftcalEvent_1_Mediadiv<?php echo esc_html($Total_Soft_Cal); ?> {
                    width: 100% !important;
                }
            }

            .TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(195, 195, 195, 0.5);
                z-index: 1;
                display: none;
            }

            .TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?> img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }
        </style>
        <div class="page">
            <input type="text" style="display:none;" id="TotalSoftCal_ArrowLeft"
                   value="<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_ArrowLeft); ?>">
            <input type="text" style="display:none;" id="TotalSoftCal_ArrowRight"
                   value="<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_ArrowRight); ?>">
            <input type="text" style="display:none;" id="totalsoftcal_<?php echo esc_html($Total_Soft_Cal); ?>_1"
                   value="<?php echo esc_html($Total_Soft_Cal); ?>">
            <div style="width:99.96%; max-width:<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_MW); ?>px; display:block; margin: 10px auto 40px;">
                <div class="monthly monthly<?php echo esc_html($Total_Soft_Cal); ?>"
                     id="totalsoftcal_<?php echo esc_html($Total_Soft_Cal); ?>"></div>
            </div>
        </div>
        <!-- JS ======================================================= -->
        <script type="text/javascript">
            (function ($) {
                $.fn.extend({
                    monthly<?php echo esc_html($Total_Soft_Cal); ?>: function (options) {
                        // These are overridden by options declared in footer
                        var defaults = {
                            weekStart: 'Mon',
                            mode: '',
                            xmlUrl: '',
                            target: '',
                            eventList: true,
                            maxWidth: false,
                            setWidth: false,
                            startHidden: false,
                            showTrigger: '',
                            stylePast: false,
                            disablePast: false
                        }
                        var options = $.extend(defaults, options),
                            that = this,
                            uniqueId = $(this).attr('id'),
                            d = new Date(),
                            currentMonth = d.getMonth() + 1,
                            currentYear = d.getFullYear(),
                            currentDay = d.getDate(),
                            monthNames = options.monthNames || ['<?php esc_html_e('Jan','Total-Soft-Calendar');?>', '<?php esc_html_e('Feb','Total-Soft-Calendar');?>', '<?php esc_html_e('Mar','Total-Soft-Calendar');?>', '<?php esc_html_e('Apr','Total-Soft-Calendar');?>', '<?php esc_html_e('May','Total-Soft-Calendar');?>', '<?php esc_html_e('June','Total-Soft-Calendar');?>', '<?php esc_html_e('July','Total-Soft-Calendar');?>', '<?php esc_html_e('Aug','Total-Soft-Calendar');?>', '<?php esc_html_e('Sep','Total-Soft-Calendar');?>', '<?php esc_html_e('Oct','Total-Soft-Calendar');?>', '<?php esc_html_e('Nov','Total-Soft-Calendar');?>', '<?php esc_html_e('Dec','Total-Soft-Calendar');?>'],
                            dayNames = options.dayNames || ['<?php esc_html_e('Sun','Total-Soft-Calendar');?>', '<?php esc_html_e('Mon','Total-Soft-Calendar');?>', '<?php esc_html_e('Tue','Total-Soft-Calendar');?>', '<?php esc_html_e('Wed','Total-Soft-Calendar');?>', '<?php esc_html_e('Thu','Total-Soft-Calendar');?>', '<?php esc_html_e('Fri','Total-Soft-Calendar');?>', '<?php esc_html_e('Sat','Total-Soft-Calendar');?>'];
                        if (options.maxWidth != false) {
                            $('#' + uniqueId).css('maxWidth', options.maxWidth);
                        }
                        if (options.setWidth != false) {
                            $('#' + uniqueId).css('width', options.setWidth);
                        }
                        if (options.startHidden == true) {
                            $('#' + uniqueId).addClass('monthly-pop').css({'position': 'absolute', 'display': 'none'});
                            $(document).on('focus', '' + options.showTrigger + '', function (e) {
                                $('#' + uniqueId).show();
                                e.preventDefault();
                            });
                            $(document).on('click', '' + options.showTrigger + ', .monthly-pop', function (e) {
                                e.stopPropagation();
                                e.preventDefault();
                            });
                            $(document).on('click', function (e) {
                                $('#' + uniqueId).hide();
                            });
                        }
                        $('#' + uniqueId).append('<div class="TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>"><img src="<?php echo esc_url(plugins_url('../Images/loading.gif',__FILE__));?>"></div>');
                        if (options.weekStart == 'Sun') {
                            $('#' + uniqueId).append('<div class="monthly-day-title-wrap monthly-day-title-wrap<?php echo esc_html($Total_Soft_Cal); ?>"><div>' + dayNames[0] + '</div><div>' + dayNames[1] + '</div><div>' + dayNames[2] + '</div><div>' + dayNames[3] + '</div><div>' + dayNames[4] + '</div><div>' + dayNames[5] + '</div><div>' + dayNames[6] + '</div></div><div class="monthly-day-wrap"></div>');
                        } else {
                            $('#' + uniqueId).append('<div class="monthly-day-title-wrap monthly-day-title-wrap<?php echo esc_html($Total_Soft_Cal); ?>"><div>' + dayNames[1] + '</div><div>' + dayNames[2] + '</div><div>' + dayNames[3] + '</div><div>' + dayNames[4] + '</div><div>' + dayNames[5] + '</div><div>' + dayNames[6] + '</div><div>' + dayNames[0] + '</div></div><div class="monthly-day-wrap"></div>');
                        }
                        var TotalSoftCal_ArrowLeft = jQuery('#TotalSoftCal_ArrowLeft').val();
                        var TotalSoftCal_ArrowRight = jQuery('#TotalSoftCal_ArrowRight').val();
                        $('#' + uniqueId).prepend('<div class="monthly-header monthly-header<?php echo esc_html($Total_Soft_Cal); ?>"><div class="monthly-header-title monthly-header-title<?php echo esc_html($Total_Soft_Cal); ?>"></div><a href="#" class="monthly-prev"><i class="TotalSoftArrow TotalSoftArrow<?php echo esc_html($Total_Soft_Cal); ?> ' + TotalSoftCal_ArrowLeft + '"></i></a><a href="#" class="monthly-next"><i class="TotalSoftArrow TotalSoftArrow<?php echo esc_html($Total_Soft_Cal); ?> ' + TotalSoftCal_ArrowRight + '"></i></a></div>').append('<div class="monthly-event-list monthly-event-list<?php echo esc_html($Total_Soft_Cal); ?>"></div>');
                        function daysInMonth(m, y) {
                            return m === 2 ? y & 3 || !(y % 25) && y & 15 ? 28 : 29 : 30 + (m + (m >> 3) & 1);
                        }
                        function setMonthly(m, y) {
                            $('#' + uniqueId).data('setMonth', m).data('setYear', y);
                            var dayQty = daysInMonth(m, y),
                                mZeroed = m - 1,
                                firstDay = new Date(y, mZeroed, 1, 0, 0, 0, 0).getDay();
                            $('#' + uniqueId + ' .monthly-day<?php echo esc_html($Total_Soft_Cal); ?>, #' + uniqueId + ' .monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?>').remove();
                            $('#' + uniqueId + ' .monthly-event-list.monthly-event-list<?php echo esc_html($Total_Soft_Cal); ?>').empty();
                            $('#' + uniqueId + ' .monthly-day-wrap').empty();
                            if (options.mode == 'event') {
                                for (var i = 0; i < dayQty; i++) {
                                    var day = i + 1;
                                    var dayNamenum = new Date(y, mZeroed, day, 0, 0, 0, 0).getDay()
                                    $('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day<?php echo esc_html($Total_Soft_Cal); ?> monthly-day-event monthly-day-event<?php echo esc_html($Total_Soft_Cal); ?>" data-number="' + day + '"><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>">' + day + '</div><div class="monthly-indicator-wrap"></div></a>');
                                    $('#' + uniqueId + ' .monthly-event-list<?php echo esc_html($Total_Soft_Cal); ?>').append('<div class="monthly-list-item" id="' + uniqueId + 'day' + day + '" data-number="' + day + '"><div class="monthly-event-list-date">' + dayNames[dayNamenum] + '<br>' + day + '</div></div>');
                                }
                            } else {
                                for (var i = 0; i < dayQty; i++) {
                                    var day = i + 1;
                                    if (((day < currentDay && m === currentMonth) || y < currentYear || (m < currentMonth && y == currentYear)) && options.stylePast == true) {
                                        $('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day<?php echo esc_html($Total_Soft_Cal); ?> monthly-day-pick monthly-past-day" data-number="' + day + '"><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>">' + day + '</div><div class="monthly-indicator-wrap"></div></a>');
                                    } else {
                                        $('#' + uniqueId + ' .monthly-day-wrap').append('<a href="#" class="m-d monthly-day monthly-day<?php echo esc_html($Total_Soft_Cal); ?> monthly-day-pick" data-number="' + day + '"><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>">' + day + '</div><div class="monthly-indicator-wrap"></div></a>');
                                    }
                                }
                            }
                            var setMonth = $('#' + uniqueId).data('setMonth'),
                                setYear = $('#' + uniqueId).data('setYear');
                            if (setMonth == currentMonth && setYear == currentYear) {
                                $('#' + uniqueId + ' *[data-number="' + currentDay + '"]').addClass('monthly-today monthly-today<?php echo esc_html($Total_Soft_Cal); ?>');
                            }
                            if (setMonth == currentMonth && setYear == currentYear) {
                                $('#' + uniqueId + ' .monthly-header-title').html(monthNames[m - 1] + ' ' + y);
                            } else {
                                $('#' + uniqueId + ' .monthly-header-title').html(monthNames[m - 1] + ' ' + y + '<a href="#" class="monthly-reset" title="<?php esc_html_e('Back To This Month','Total-Soft-Calendar');?>"><i class="TotalSoftRefresh TotalSoftRefresh<?php echo esc_html($Total_Soft_Cal); ?> totalsoft totalsoft-refresh"></i></a> ');
                            }
                            if (options.weekStart == 'Sun' && firstDay != 7) {
                                for (var i = 0; i < firstDay; i++) {
                                    $('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?>"><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>"></div></div>');
                                }
                            } else if (options.weekStart == 'Mon' && firstDay == 0) {
                                for (var i = 0; i < 6; i++) {
                                    $('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?>" ><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>"></div></div>');
                                }
                            } else if (options.weekStart == 'Mon' && firstDay != 1) {
                                for (var i = 0; i < (firstDay - 1); i++) {
                                    $('#' + uniqueId + ' .monthly-day-wrap').prepend('<div class="m-d monthly-day-blank monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?>" ><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>"></div></div>');
                                }
                            }
                            var numdays = $('#' + uniqueId + ' .monthly-day<?php echo esc_html($Total_Soft_Cal); ?>').length,
                                numempty = $('#' + uniqueId + ' .monthly-day-blank').length,
                                totaldays = numdays + numempty,
                                roundup = Math.ceil(totaldays / 7) * 7,
                                daysdiff = roundup - totaldays;
                            if (totaldays % 7 != 0) {
                                for (var i = 0; i < daysdiff; i++) {
                                    $('#' + uniqueId + ' .monthly-day-wrap').append('<div class="m-d monthly-day-blank monthly-day-blank<?php echo esc_html($Total_Soft_Cal); ?>"><div class="monthly-day-number monthly-day-number<?php echo esc_html($Total_Soft_Cal); ?>"></div></div>');
                                }
                            }
                            if (options.mode == 'event') {
                                $.get('' + options.xmlUrl + '', function (d) {
									<?php for($i=0;$i<count($Total_Soft_CalEvents);$i++){
                                        $Total_Soft_CalEventDes=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_CalEvents[$i]->id));
                                        $Total_Soft_CalEventRec=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_CalEvents[$i]->id));
									    $TotalSoftCal_EvStartDate=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
                                        if($TotalSoftCal_EvStartDate[1][0]==0){
									    	$TotalSoftCal_EvStartDate[1]=$TotalSoftCal_EvStartDate[1][1];
									    }
									    if($TotalSoftCal_EvStartDate[2][0]==0){
									    	$TotalSoftCal_EvStartDate[2]=$TotalSoftCal_EvStartDate[2][1];
									    }
									    $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate=implode('-',$TotalSoftCal_EvStartDate);
									    $TotalSoftCal_EvEndDate=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
									    if($TotalSoftCal_EvEndDate[1][0]==0){
									    	$TotalSoftCal_EvEndDate[1]=$TotalSoftCal_EvEndDate[1][1];
									    }
									    if($TotalSoftCal_EvEndDate[2][0]==0){
									    	$TotalSoftCal_EvEndDate[2]=$TotalSoftCal_EvEndDate[2][1];
									    }
									    $Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate=implode('-',$TotalSoftCal_EvEndDate);
									    if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab)=='none'){
									    	$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab='';
									    }
                                        if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL!=''){
									    	$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL = esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL);
									    }
                                        if($Total_Soft_CalEventDes[0]->TotalSoftCal_EvImg!=''){
									    	$Total_Soft_CalEventDes[0]->TotalSoftCal_EvImg = esc_url($Total_Soft_CalEventDes[0]->TotalSoftCal_EvImg);
									    }
                                        if($Total_Soft_CalEventDes[0]->TotalSoftCal_EvVid_Src!=''){
									    	$Total_Soft_CalEventDes[0]->TotalSoftCal_EvVid_Src = esc_url($Total_Soft_CalEventDes[0]->TotalSoftCal_EvVid_Src);
									    }
									    $TotalSoftEventData=esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate).'TSCEv'.$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL.'TSCEv'.html_entity_decode(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName)).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvColor).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->id).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime).'TSCEv'.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab).'TSCEv'.html_entity_decode($Total_Soft_CalEventDes[0]->TotalSoftCal_EvDesc).'TSCEv'.$Total_Soft_CalEventDes[0]->TotalSoftCal_EvImg.'TSCEv'.$Total_Soft_CalEventDes[0]->TotalSoftCal_EvVid_Src.'TSCEv'.$TotalSoftCal_Part[0]->TotalSoftCal_10.'TSCEv'.$TotalSoftCal_Part[0]->TotalSoftCal_05.'TSCEv'.$Total_Soft_CalEventRec[0]->TotalSoftCal_EvRec;
									    ?>
                                        Event_Calendar('<?php echo wp_kses_post($TotalSoftEventData);?>', uniqueId, setMonth, setYear, dayQty,'<?php echo esc_html( $Total_Soft_Cal ); ?>');
									<?php } ?>
                                }).fail(function () {
                                    console.error('Error Data...');
                                });
                            }
                            var divs = $("#" + uniqueId + " .m-d");
                            for (var i = 0; i < divs.length; i += 7) {
                                divs.slice(i, i + 7).wrapAll("<div class='monthly-week'></div>");
                            }
                        }
                        setMonthly(currentMonth, currentYear);
                        function viewToggleButton() {
                            if ($('#' + uniqueId + ' .monthly-event-list').is(":visible")) {
                                $('#' + uniqueId + ' .monthly-cal').remove();
                                $('#' + uniqueId + ' .monthly-header-title').prepend('<a href="#" class="monthly-cal" title="<?php esc_html_e('Back To Month View','Total-Soft-Calendar');?>"><div></div></a>');
                            }
                        }
                        $(document.body).on('click', '#' + uniqueId + ' .monthly-next', function (e) {
                            $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'block');
                            var setMonth = $('#' + uniqueId).data('setMonth'),
                                setYear = $('#' + uniqueId).data('setYear');
                            if (setMonth == 12) {
                                var newMonth = 1,
                                    newYear = setYear + 1;
                                setMonthly(newMonth, newYear);
                            } else {
                                var newMonth = setMonth + 1,
                                    newYear = setYear;
                                setMonthly(newMonth, newYear);
                            }
                            viewToggleButton();
                            e.preventDefault();
                            setTimeout(function () {
                                $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'none');
                            }, 1000)
                        });
                        $(document.body).on('click', '#' + uniqueId + ' .monthly-prev', function (e) {
                            $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'block');
                            var setMonth = $('#' + uniqueId).data('setMonth'),
                                setYear = $('#' + uniqueId).data('setYear');
                            if (setMonth == 1) {
                                var newMonth = 12,
                                    newYear = setYear - 1;
                                setMonthly(newMonth, newYear);
                            } else {
                                var newMonth = setMonth - 1,
                                    newYear = setYear;
                                setMonthly(newMonth, newYear);
                            }
                            viewToggleButton();
                            e.preventDefault();
                            setTimeout(function () {
                                $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'none');
                            }, 1000)
                        });
                        $(document.body).on('click', '#' + uniqueId + ' .monthly-reset', function (e) {
                            $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'block');
                            setMonthly(currentMonth, currentYear);
                            viewToggleButton();
                            e.preventDefault();
                            e.stopPropagation();
                            setTimeout(function () {
                                $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'none');
                            }, 1000)
                        });
                        $(document.body).on('click', '#' + uniqueId + ' .monthly-cal', function (e) {
                            $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'block');
                            $(this).remove();
                            $('#' + uniqueId + ' .monthly-event-list').css('transform', 'scale(0)').delay('800').hide();
                            e.preventDefault();
                            setTimeout(function () {
                                $('.TS_Calendar_loading_<?php echo esc_html($Total_Soft_Cal); ?>').css('display', 'none');
                            }, 1000)
                        });
                        $(document.body).on('click', '#' + uniqueId + ' a.monthly-day', function (e) {
                            if (options.mode == 'event' && options.eventList == true) {
                                var whichDay = $(this).data('number');
                                if ($('#' + uniqueId + ' .monthly-list-item[data-number="' + whichDay + '"]').hasClass('item-has-event')) {
                                    $('#' + uniqueId + ' .monthly-event-list').show();
                                    $('#' + uniqueId + ' .monthly-event-list').css('transform');
                                    $('#' + uniqueId + ' .monthly-event-list').css('transform', 'scale(1)');
                                    $('#' + uniqueId + ' .monthly-list-item[data-number="' + whichDay + '"]').show();
                                    var myElement = document.getElementById(uniqueId + 'day' + whichDay);
                                    var topPos = myElement.offsetTop;
                                    $('#' + uniqueId + ' .monthly-event-list').scrollTop(topPos);
                                    viewToggleButton();
                                }
                            }
                            e.preventDefault();
                        });
                        $(document.body).on('click', '#' + uniqueId + ' .listed-event', function (e) {
                            var href = $(this).attr('href');
                            if (!href) {
                                e.preventDefault();
                            }
                        });
                    }
                });
            })(jQuery);
            jQuery(window).load(function () {
                jQuery('#totalsoftcal_<?php echo esc_html($Total_Soft_Cal); ?>').monthly<?php echo esc_html($Total_Soft_Cal); ?>({
                    mode: 'event',
                    weekStart: '<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal_WDStart);?>',
                });
            });
        </script>
		<?php }else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Simple Calendar'){
            wp_register_style("ts_calendar_styles_e", plugins_url('../CSS/jquery.e-calendar.css',__FILE__), []);
            wp_enqueue_style("ts_calendar_styles_e");
        ?>
        <script type="text/javascript">
            (function ($) {
                var eCalendar = function (options, object) {
                    // Initializing global variables
                    var adDay = new Date().getDate();
                    var adMonth = new Date().getMonth();
                    var adYear = new Date().getFullYear();
                    var dDay = adDay;
                    var dMonth = adMonth;
                    var dYear = adYear;
                    var instance = object;
                    var settings = $.extend({}, $.fn.eCalendar.defaults, options);

                    function lpad(value, length, pad) {
                        if (typeof pad == 'undefined') {
                            pad = '0';
                        }
                        var p;
                        for (var i = 0; i < length; i++) {
                            p += pad;
                        }
                        return (p + value).slice(-length);
                    }

                    var mouseOver = function () {
                        $(this).addClass('c-nav-btn-over');
                    };
                    var mouseLeave = function () {
                        $(this).removeClass('c-nav-btn-over');
                    };
                    var mouseOverEvent = function () {
                        $(this).addClass('c-event-over');
                        var d = $(this).attr('data-event-day');
                    };
                    var mouseLeaveEvent = function () {
                        $(this).removeClass('c-event-over');
                        var d = $(this).attr('data-event-day');
                    };
                    var mouseOverDay = function () {
                        $(this).addClass('c-event-over');
                    };
                    var mouseLeaveDay = function () {
                        $(this).removeClass('c-event-over');
                    };
                    var mouseOverItem = function () {
                        var d = $(this).attr('data-event-day');
                        $('div.c-event[data-event-day="' + d + '"]').addClass('c-event-over');
                    };
                    var mouseLeaveItem = function () {
                        var d = $(this).attr('data-event-day');
                        $('div.c-event[data-event-day="' + d + '"]').removeClass('c-event-over');
                    };
                    var nextMonth = function () {
                        if (dMonth < 11) {
                            dMonth++;
                        } else {
                            dMonth = 0;
                            dYear++;
                        }
                        print();
                    };
                    var previousMonth = function () {
                        if (dMonth > 0) {
                            dMonth--;
                        } else {
                            dMonth = 11;
                            dYear--;
                        }
                        print();
                    };

                    function loadEvents() {
                        if (typeof settings.url != 'undefined' && settings.url != '') {
                            $.ajax({
                                url: settings.url,
                                async: false,
                                success: function (result) {
                                    settings.events = result;
                                }
                            });
                        }
                    }

                    function print() {
                        loadEvents();
                        var dWeekDayOfMonthStart = new Date(dYear, dMonth, 1).getDay() - settings.firstDayOfWeek;
                        if (dWeekDayOfMonthStart < 0) {
                            dWeekDayOfMonthStart = 6 - ((dWeekDayOfMonthStart + 1) * -1);
                        }
                        var dLastDayOfMonth = new Date(dYear, dMonth + 1, 0).getDate();
                        var dLastDayOfPreviousMonth = new Date(dYear, dMonth + 1, 0).getDate() - dWeekDayOfMonthStart + 1;

                        var cBody = $('<div/>').addClass('c-grid');
                        var cEvents = $('<div/>').addClass('c-event-grid');
                        var cEventsBody = $('<div/>').addClass('c-event-body');
                        cEvents.append($('<div/>').addClass('c-event-title c-pad-top').html(settings.eventTitle));
                        cEvents.append(cEventsBody);
                        var cNext = $('<div/>').addClass('c-next c-grid-title c-pad-top');
                        var cMonth = $('<div/>').addClass('c-month c-grid-title c-pad-top');
                        var cPrevious = $('<div/>').addClass('c-previous c-grid-title c-pad-top');
                        cPrevious.html(settings.textArrows.previous);
                        cMonth.html(settings.months[dMonth] + ' ' + dYear);
                        cNext.html(settings.textArrows.next);

                        cPrevious.on('mouseover', mouseOver).on('mouseleave', mouseLeave).on('click', previousMonth);
                        cNext.on('mouseover', mouseOver).on('mouseleave', mouseLeave).on('click', nextMonth);

                        cBody.append(cPrevious);
                        cBody.append(cMonth);
                        cBody.append(cNext);
                        var dayOfWeek = settings.firstDayOfWeek;
                        for (var i = 0; i < 7; i++) {
                            if (dayOfWeek > 6) {
                                dayOfWeek = 0;
                            }
                            var cWeekDay = $('<div/>').addClass('c-week-day c-pad-top');
                            cWeekDay.html(settings.weekDays[dayOfWeek]);
                            cBody.append(cWeekDay);
                            dayOfWeek++;
                        }
                        var day = 1;
                        var dayOfNextMonth = 1;
                        for (var i = 0; i < 42; i++) {
                            var cDay = $('<div/>');
                            if (i < dWeekDayOfMonthStart) {
                                cDay.addClass('c-day-previous-month c-pad-top');
                                cDay.html(dLastDayOfPreviousMonth++);
                            } else if (day <= dLastDayOfMonth) {
                                cDay.addClass('c-day c-pad-top');
                                cDay.on('mouseover', mouseOverDay).on('mouseleave', mouseLeaveDay);

                                if (day == dDay && adMonth == dMonth && adYear == dYear) {
                                    cDay.addClass('c-today');
                                    cDay.on('mouseover', mouseOverDay).on('mouseleave', mouseLeaveDay);
                                }
                                for (var j = 0; j < settings.events.length; j++) {
                                    var d = settings.events[j].datetime;
                                    var enddateyear = settings.events[j].enddateyear;
                                    var enddatemonth = settings.events[j].enddatemonth;
                                    var enddateday = settings.events[j].enddateday;
                                    var eventrec = settings.events[j].eventrec;
                                    if (d.getDate() == day && d.getMonth() == dMonth && d.getFullYear() == dYear) {
                                        cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                        cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                    }
                                    if (eventrec == 'daily') {
                                        if (!enddateday) {
                                            if (d.getMonth() == dMonth && d.getFullYear() == dYear) {
                                                if (d.getDate() < day) {
                                                    cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                    cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                                }
                                            } else if ((d.getMonth() < dMonth && d.getFullYear() == dYear) || d.getFullYear() < dYear) {
                                                cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                            }
                                        } else {
                                            if (d.getMonth() == dMonth && d.getFullYear() == dYear && enddatemonth == dMonth && enddateyear == dYear) {
                                                if (d.getDate() < day && day <= enddateday) {
                                                    cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                    cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                                }
                                            } else if (d.getMonth() == dMonth && d.getFullYear() == dYear && enddatemonth != dMonth) {
                                                if (d.getDate() < day) {
                                                    cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                    cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                                }
                                            } else if (enddatemonth == dMonth && enddateyear == dYear) {
                                                if (enddateday >= day) {
                                                    cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                    cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                                }
                                            } else if ((d.getMonth() < dMonth && enddatemonth > dMonth && enddateyear == dYear) || (d.getFullYear() < dYear && dYear < enddateyear) || (d.getFullYear() < dYear && dYear == enddateyear && enddatemonth >= dMonth) || (d.getFullYear() == dYear && dYear < enddateyear && d.getMonth() < dMonth)) {
                                                cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                                cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                            }
                                        }
                                    } else if (eventrec == 'weekly') {
                                        var sdNamenum = new Date(d.getFullYear(), d.getMonth(), d.getDate(), 0, 0, 0, 0).getDay();
                                        var cdNamenum = new Date(dYear, dMonth, day, 0, 0, 0, 0).getDay();
                                        if (sdNamenum == cdNamenum && ((d.getDate() < day && d.getMonth() == dMonth && d.getFullYear() == dYear && !enddateday) || (d.getMonth() < dMonth && d.getFullYear() == dYear && !enddateday) || (d.getFullYear() < dYear && !enddateday) || (d.getDate() < day && d.getMonth() == dMonth && d.getFullYear() == dYear && enddatemonth == dMonth && enddateyear == dYear && day <= enddateday) || (d.getDate() < day && d.getMonth() == dMonth && d.getFullYear() == dYear && enddatemonth != dMonth && enddateyear == dYear) || (d.getMonth() < dMonth && d.getFullYear() == dYear && enddatemonth > dMonth && enddateyear == dYear) || (d.getMonth() < dMonth && d.getFullYear() == dYear && enddatemonth == dMonth && enddateyear == dYear && enddateday >= day) || (d.getFullYear() != enddateyear && (d.getMonth() <= dMonth && d.getFullYear() == dYear) || (d.getFullYear() < dYear && enddateyear > dYear) || (d.getFullYear() < dYear && enddateyear == dYear && enddatemonth >= dMonth)))) {
                                            cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                            cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                        }
                                    } else if (eventrec == 'monthly') {
                                        if ((d.getDate() == day && d.getMonth() < dMonth && d.getFullYear() == dYear && !enddateday) || (d.getDate() == day && d.getFullYear() < dYear && !enddateday) || (d.getDate() == day && d.getMonth() < dMonth && d.getFullYear() == dYear && enddatemonth >= dMonth && enddateyear == dYear) || (d.getFullYear() != enddateyear && ((d.getDate() == day && d.getMonth() < dMonth && d.getFullYear() == dYear) || (d.getDate() == day && d.getFullYear() < dYear && enddateyear > dYear) || (d.getDate() == day && d.getFullYear() < dYear && enddateyear == dYear && enddatemonth >= dMonth)))) {
                                            cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                            cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                        }
                                    } else if (eventrec == 'yearly') {
                                        if ((d.getDate() == day && d.getMonth() == dMonth && d.getFullYear() < dYear && !enddateday) || (d.getDate() == day && d.getMonth() == dMonth && d.getFullYear() < dYear && enddateyear >= dYear)) {
                                            cDay.addClass('c-event').attr('data-event-day', d.getDate());
                                            cDay.on('mouseover', mouseOverEvent).on('mouseleave', mouseLeaveEvent);
                                        }
                                    }
                                }
                                cDay.html(day++);
                            } else {
                                cDay.addClass('c-day-next-month c-pad-top');
                                cDay.html(dayOfNextMonth++);
                            }
                            cBody.append(cDay);
                        }
                        var eventList = $('<div/>').addClass('c-event-list');
                        for (var i = 0; i < settings.events.length; i++) {
                            var d = settings.events[i].datetime;
                            var endtime = settings.events[i].endtime;
                            var eventurl = settings.events[i].eventurl;
                            var eventnewtab = settings.events[i].eventnewtab;
                            var enddateyear = settings.events[i].enddateyear;
                            var enddatemonth = settings.events[i].enddatemonth;
                            var enddateday = settings.events[i].enddateday;
                            var timeformat = settings.events[i].timeformat;
                            var dateformat = settings.events[i].dateformat;
                            var enddatereal = settings.events[i].enddatereal;
                            var timestartPeriod = 'AM';
                            var timeendPeriod = 'AM';
                            var timesimcalreal = '';
                            var eventimg = settings.events[i].eventimg;
                            var eventvid = settings.events[i].eventvid;
                            var eventvidpos = settings.events[i].eventvidpos;
                            var realstarttime = settings.events[i].realstarttime;
                            var eventrec = settings.events[i].eventrec;
                            var eventshowdate = settings.events[i].eventshowdate;

                            if (realstarttime) {
                                if (timeformat == '12') {
                                    var timestartSplit = realstarttime.split(':');
                                    if (parseInt(timestartSplit[0]) >= 12) {
                                        if (parseInt(timestartSplit[0]) >= 22) {
                                            var SimCstartTime = (timestartSplit[0] - 12) + ':' + timestartSplit[1];
                                        } else {
                                            var SimCstartTime = '0' + (timestartSplit[0] - 12) + ':' + timestartSplit[1];
                                        }
                                        var timestartPeriod = 'PM';
                                    } else {
                                        var SimCstartTime = timestartSplit[0] + ':' + timestartSplit[1];
                                    }
                                    if (parseInt(SimCstartTime) == 0) {
                                        var SimCstartTime = '12:' + timestartSplit[1];
                                    }
                                    timesimcalreal = SimCstartTime + ' ' + timestartPeriod;
                                    if (endtime) {
                                        var timeendSplit = endtime.split(':');
                                        if (parseInt(timeendSplit[0]) >= 12) {
                                            if (parseInt(timeendSplit[0]) >= 22) {
                                                var SimCendTime = (timeendSplit[0] - 12) + ':' + timeendSplit[1];
                                            } else {
                                                var SimCendTime = '0' + (timeendSplit[0] - 12) + ':' + timeendSplit[1];
                                            }
                                            var timeendPeriod = 'PM';
                                        } else {
                                            var SimCendTime = endtime;
                                        }
                                        if (parseInt(SimCendTime) == 0) {
                                            var SimCendTime = '12:' + timeendSplit[1];
                                        }
                                        timesimcalreal += ' - ' + SimCendTime + ' ' + timeendPeriod;
                                    }
                                } else {
                                    timestartPeriod = '';
                                    timeendPeriod = '';

                                    timesimcalreal = realstarttime;
                                    if (endtime) {
                                        timesimcalreal += ' - ' + endtime;
                                    }
                                }
                            }
                            if ((d.getMonth() == dMonth && d.getFullYear() == dYear) || (d.getMonth() < dMonth && d.getFullYear() <= dYear && enddateyear == dYear && enddatemonth == dMonth && enddateday != '' && eventrec != '') || (d.getMonth() < dMonth && d.getFullYear() <= dYear && enddateyear == '' && eventrec == 'daily') || (d.getFullYear() < dYear && enddateyear == '' && eventrec == 'daily') || (d.getMonth() < dMonth && enddatemonth > dMonth && enddateyear == dYear && eventrec == 'daily') || (d.getFullYear() < dYear && dYear < enddateyear && eventrec == 'daily') || (d.getFullYear() < dYear && dYear == enddateyear && enddatemonth >= dMonth && eventrec == 'daily') || (d.getFullYear() == dYear && dYear < enddateyear && d.getMonth() < dMonth && eventrec == 'daily') || (d.getMonth() == dMonth && d.getFullYear() < dYear && !enddateday && eventrec == 'yearly') || (d.getMonth() == dMonth && d.getFullYear() < dYear && enddateyear >= dYear && eventrec == 'yearly') || ((d.getMonth() < dMonth && d.getFullYear() == dYear && !enddateday && eventrec == 'monthly') || (d.getFullYear() < dYear && !enddateday && eventrec == 'monthly') || (d.getMonth() < dMonth && d.getFullYear() == dYear && enddatemonth >= dMonth && enddateyear == dYear && eventrec == 'monthly') || (d.getFullYear() != enddateyear && eventrec == 'monthly' && ((d.getMonth() < dMonth && d.getFullYear() == dYear) || (d.getFullYear() < dYear && enddateyear > dYear) || (d.getFullYear() < dYear && enddateyear == dYear && enddatemonth >= dMonth)))) || ((d.getMonth() < dMonth && d.getFullYear() == dYear && !enddateday && eventrec == 'weekly') || (d.getFullYear() < dYear && !enddateday && eventrec == 'weekly') || (d.getMonth() < dMonth && d.getFullYear() == dYear && enddatemonth >= dMonth && enddateyear == dYear && eventrec == 'weekly') || (d.getFullYear() != enddateyear && eventrec == 'weekly' && ((d.getMonth() < dMonth && d.getFullYear() == dYear) || (d.getFullYear() < dYear && enddateyear > dYear) || (d.getFullYear() < dYear && enddateyear == dYear && enddatemonth >= dMonth))))) {
                                var SimpleMonth = new Array('', '<?php esc_html_e('January','Total-Soft-Calendar');?>', '<?php esc_html_e('February','Total-Soft-Calendar');?>', '<?php esc_html_e('March','Total-Soft-Calendar');?>', '<?php esc_html_e('April','Total-Soft-Calendar');?>', '<?php esc_html_e('May','Total-Soft-Calendar');?>', '<?php esc_html_e('June','Total-Soft-Calendar');?>', '<?php esc_html_e('July','Total-Soft-Calendar');?>', '<?php esc_html_e('August','Total-Soft-Calendar');?>', '<?php esc_html_e('September','Total-Soft-Calendar');?>', '<?php esc_html_e('October','Total-Soft-Calendar');?>', '<?php esc_html_e('November','Total-Soft-Calendar');?>', '<?php esc_html_e('December','Total-Soft-Calendar');?>');
                                if (eventshowdate == 'no') {
                                    var date = timesimcalreal;
                                } else {
                                    if (enddatereal == '--' || enddatereal == '') {
                                        if (dateformat == 'yy-mm-dd') {
                                            var date = d.getFullYear() + '-' + lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + ' ' + timesimcalreal;
                                        } else if (dateformat == 'yy MM dd') {
                                            var date = d.getFullYear() + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ' ' + timesimcalreal;
                                        } else if (dateformat == 'dd-mm-yy') {
                                            var date = lpad(d.getDate(), 2) + '-' + lpad(d.getMonth() + 1, 2) + '-' + d.getFullYear() + ' ' + timesimcalreal;
                                        } else if (dateformat == 'dd MM yy') {
                                            var date = lpad(d.getDate(), 2) + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + d.getFullYear() + ' ' + timesimcalreal;
                                        } else if (dateformat == 'mm-dd-yy') {
                                            var date = lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + '-' + d.getFullYear() + ' ' + timesimcalreal;
                                        } else if (dateformat == 'MM dd, yy') {
                                            var date = SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ', ' + d.getFullYear() + ' ' + timesimcalreal;
                                        } else {
                                            var date = lpad(d.getDate(), 2) + '.' + lpad(d.getMonth() + 1, 2) + '.' + d.getFullYear() + ' ' + timesimcalreal;
                                        }
                                    } else {
                                        if (lpad(d.getDate(), 2) == lpad(enddateday, 2) && lpad(d.getMonth() + 1, 2) == lpad(parseInt(enddatemonth) + 1, 2) && d.getFullYear() == enddateyear) {
                                            if (dateformat == 'yy-mm-dd') {
                                                var date = d.getFullYear() + '-' + lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + ' ' + timesimcalreal;
                                            } else if (dateformat == 'yy MM dd') {
                                                var date = d.getFullYear() + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ' ' + timesimcalreal;
                                            } else if (dateformat == 'dd-mm-yy') {
                                                var date = lpad(d.getDate(), 2) + '-' + lpad(d.getMonth() + 1, 2) + '-' + d.getFullYear() + ' ' + timesimcalreal;
                                            } else if (dateformat == 'dd MM yy') {
                                                var date = lpad(d.getDate(), 2) + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + d.getFullYear() + ' ' + timesimcalreal;
                                            } else if (dateformat == 'mm-dd-yy') {
                                                var date = lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + '-' + d.getFullYear() + ' ' + timesimcalreal;
                                            } else if (dateformat == 'MM dd, yy') {
                                                var date = SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ', ' + d.getFullYear() + ' ' + timesimcalreal;
                                            } else {
                                                var date = lpad(d.getDate(), 2) + '.' + lpad(d.getMonth() + 1, 2) + '.' + d.getFullYear() + ' ' + timesimcalreal;
                                            }
                                        } else {
                                            if (dateformat == 'yy-mm-dd') {
                                                var date = d.getFullYear() + '-' + lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + ' / ' + enddateyear + '-' + lpad(parseInt(enddatemonth) + 1, 2) + '-' + lpad(enddateday, 2) + ' ' + timesimcalreal;
                                            } else if (dateformat == 'yy MM dd') {
                                                var date = d.getFullYear() + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ' - ' + enddateyear + ' ' + SimpleMonth[parseInt(lpad(parseInt(enddatemonth) + 1, 2))] + ' ' + lpad(enddateday, 2) + ' ' + timesimcalreal;
                                            } else if (dateformat == 'dd-mm-yy') {
                                                var date = lpad(d.getDate(), 2) + '-' + lpad(d.getMonth() + 1, 2) + '-' + d.getFullYear() + ' / ' + lpad(enddateday, 2) + '-' + lpad(parseInt(enddatemonth) + 1, 2) + '-' + enddateyear + ' ' + timesimcalreal;
                                            } else if (dateformat == 'dd MM yy') {
                                                var date = lpad(d.getDate(), 2) + ' ' + SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + d.getFullYear() + ' - ' + lpad(enddateday, 2) + ' ' + SimpleMonth[parseInt(lpad(parseInt(enddatemonth) + 1, 2))] + ' ' + enddateyear + ' ' + timesimcalreal;
                                            } else if (dateformat == 'mm-dd-yy') {
                                                var date = lpad(d.getMonth() + 1, 2) + '-' + lpad(d.getDate(), 2) + '-' + d.getFullYear() + ' / ' + lpad(parseInt(enddatemonth) + 1, 2) + '-' + lpad(enddateday, 2) + '-' + enddateyear + ' ' + timesimcalreal;
                                            } else if (dateformat == 'MM dd, yy') {
                                                var date = SimpleMonth[parseInt(lpad(d.getMonth() + 1, 2))] + ' ' + lpad(d.getDate(), 2) + ', ' + d.getFullYear() + ' - ' + SimpleMonth[parseInt(lpad(parseInt(enddatemonth) + 1, 2))] + ' ' + lpad(enddateday, 2) + ', ' + enddateyear + ' ' + timesimcalreal;
                                            } else {
                                                var date = lpad(d.getDate(), 2) + '.' + lpad(d.getMonth() + 1, 2) + '.' + d.getFullYear() + ' - ' + lpad(enddateday, 2) + '.' + lpad(parseInt(enddatemonth) + 1, 2) + '.' + enddateyear + ' ' + timesimcalreal;
                                            }
                                        }
                                    }
                                }

                                var item = $('<div/>').addClass('c-event-item');
                                if (eventurl != '' && eventnewtab == '_blank') {
                                    var title = $('<div/>').addClass('title').html(date + ' ' + '<a href="' + eventurl + '" target="_blank">' + settings.events[i].title + '</a>');
                                } else if (eventurl != '' && eventnewtab == '') {
                                    var title = $('<div/>').addClass('title').html(date + ' ' + '<a href="' + eventurl + '" target="">' + settings.events[i].title + '</a>');
                                } else {
                                    var title = $('<div/>').addClass('title').html(date + ' ' + settings.events[i].title);
                                }
                                if (eventimg) {
                                    if (!eventvid) {
                                        var simplecalmedia = '<div style="position: relative; width: 99%; margin: 10px auto; text-align: center;"><img src="' + eventimg + '" class="TotalSoftcalEvent_2_Media"></div>';
                                    } else {
                                        var simplecalmedia = '<div style="position: relative; width: 99%; margin: 10px auto; text-align: center;"><div class="TotalSoftcalEvent_2_Mediadiv"><iframe src="' + eventvid + '" class="TotalSoftcalEvent_2_Mediaiframe" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></div>';
                                    }
                                } else {
                                    var simplecalmedia = '';
                                }
                                if (settings.events[i].description) {
                                    var description = $('<div/>').addClass('description').html(settings.events[i].description);
                                }
                                item.attr('data-event-day', d.getDate());
                                item.on('mouseover', mouseOverItem).on('mouseleave', mouseLeaveItem);
                                if (eventvidpos == 'before') {
                                    item.append(title).append(simplecalmedia).append(description);
                                } else if (eventvidpos == 'after') {
                                    item.append(title).append(description).append(simplecalmedia);
                                }
                                eventList.append(item);
                            }
                        }
                        $(instance).addClass('TotalSoftSimpleCalendar');
                        cEventsBody.append(eventList);
                        $(instance).html(cBody).append(cEvents);
                    }

                    return print();
                }
                $.fn.eCalendar = function (oInit) {
                    return this.each(function () {
                        return eCalendar(oInit, $(this));
                    });
                };
                // plugin defaults
                $.fn.eCalendar.defaults = {
                    weekDays: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    textArrows: {previous: '<', next: '>'},
                    eventTitle: 'Eventos',
                    url: '',
                    events: [
                        {
                            title: 'Evento de Abertura',
                            description: 'Abertura das Olimpíadas Rio 2016',
                            datetime: new Date(2016, new Date().getMonth(), 12, 17)
                        },
                        {
                            title: 'Tênis de Mesa',
                            description: 'BRA x ARG - Semifinal',
                            datetime: new Date(2016, new Date().getMonth(), 23, 16)
                        },
                        {
                            title: 'Ginástica Olímpica',
                            description: 'Classificatórias de equipes',
                            datetime: new Date(2016, new Date().getMonth(), 31, 16)
                        }
                    ],
                    firstDayOfWeek: 0
                };

            }(jQuery));
        </script>
        <style type="text/css">
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                max-width: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_W);?>px;
                height: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_H);?>px;
                border: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BW);?>px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BS);?> <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BC);?>;
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_DBgC);?>;
                margin: 30px auto;
                position: relative;
                z-index: 0;
            }

            <?php if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShShow == 'Yes'){ ?>
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '1'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                -webkit-box-shadow: 0 30px 25px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 30px 25px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0 30px 25px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '2'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                -webkit-box-shadow: 0px 0px 25px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0px 0px 25px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0px 0px 25px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '3'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '4'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                right: 10px;
                left: auto;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '5'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '6'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                right: 10px;
                left: auto;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '7'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 25px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                transform: rotate(-8deg);
                -moz-transform: rotate(-8deg);
                -webkit-transform: rotate(-8deg);
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                transform: rotate(8deg);
                -moz-transform: rotate(8deg);
                -webkit-transform: rotate(8deg);
                right: 10px;
                left: auto;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '8'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                top: 50%;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '9'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                top: 0;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '10'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?> inset;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                top: 10px;
                bottom: 10px;
                left: 0;
                right: 0;
                border-radius: 100px / 10px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '11'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:before, #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                position: absolute;
                content: "";
                box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                top: 40px;
                left: 20px;
                bottom: 50px;
                width: 15%;
                z-index: -1;
                -webkit-transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                transform: rotate(-3deg);
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar:after {
                -webkit-transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                transform: rotate(3deg);
                right: 20px;
                left: auto;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '12'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '13'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '14'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '15'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '16'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '17'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal2_BxShType == '18'){ ?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?>.TotalSoftSimpleCalendar {
                box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -moz-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
                -webkit-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_BxShC);?>;
            }

            <?php }?>
            <?php }?>
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-grid-title {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_MBgC);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-month {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_MC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_MFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_MFF);?>;
            }

            /* Events List custom webkit scrollbar */
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-list::-webkit-scrollbar {
                width: 9px;
            }

            /* Track */
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-list::-webkit-scrollbar-track {
                background: none;
            }

            /* Handle */
            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-list::-webkit-scrollbar-thumb {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_TC);?>;
                border: 1px solid #E9EBEC;
                border-radius: 10px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-list::-webkit-scrollbar-thumb:hover {
                background: #cecece;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-week-day {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_WBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_WC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_WFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_WFF);?>;
                border-bottom: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_LAW_W);?>px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_LAW_S);?> <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_LAW_C);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-grid {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_DBgC);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-day {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_DBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_DC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_DFS);?>px;
                font-family: open_sanslight, Helvetica, Arial, sans-serif;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-today {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_TdBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_TdC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_TdFS);?>px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_EdBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_EdC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_EdFS);?>px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-over {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_HBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_HC);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-previous, #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-next {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_ArrFS);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_ArrC);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-day-previous-month, #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-day-next-month {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_OmBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_OmC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_OmFS);?>px;
                font-family: open_sanslight, Helvetica, Arial, sans-serif;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-title {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HBgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HFF);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-body {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_BBgC);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-item > .title, #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .c-event-item > .title a {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_TC);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_TFS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_TFF);?>;
                text-align: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .monthly-list-item:after {
                content: "<?php esc_html_e( 'No Events', 'Total-Soft-Calendar' );?>";
                padding: 4px 10px;
                display: block;
                margin-bottom: 5px;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_2_Media {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>%;
                height: auto;
                display: inline !important;
                margin: 0 auto !important;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_2_Mediadiv {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>%;
                position: relative;
                display: inline-block;
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_2_Mediadiv:after {
                padding-top: 56.25% !important;
                display: block;
                content: '';
            }

            #calendar_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_2_Mediaiframe {
                width: 100% !important;
                height: 100% !important;
                left: 0;
                position: absolute;
            }

            @media screen and (max-width: 400px) {
                .TotalSoftcalEvent_2_Media, .TotalSoftcalEvent_2_Mediadiv {
                    width: 100% !important;
                }
            }

            @media screen and (max-width: 700px) {
                .TotalSoftcalEvent_2_Media, .TotalSoftcalEvent_2_Mediadiv {
                    width: 100% !important;
                }
            }
        </style>
        <div id="calendar_<?php echo esc_html($Total_Soft_Cal); ?>"></div>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('#calendar_<?php echo esc_html($Total_Soft_Cal); ?>').eCalendar({
                    weekDays: ['<?php esc_html_e('Sun','Total-Soft-Calendar');?>', '<?php esc_html_e('Mon','Total-Soft-Calendar');?>', '<?php esc_html_e('Tue','Total-Soft-Calendar');?>', '<?php esc_html_e('Wed','Total-Soft-Calendar');?>', '<?php esc_html_e('Thu','Total-Soft-Calendar');?>', '<?php esc_html_e('Fri','Total-Soft-Calendar');?>', '<?php esc_html_e('Sat','Total-Soft-Calendar');?>'],
                    months: ['<?php esc_html_e('January','Total-Soft-Calendar');?>', '<?php esc_html_e('February','Total-Soft-Calendar');?>', '<?php esc_html_e('March','Total-Soft-Calendar');?>', '<?php esc_html_e('April','Total-Soft-Calendar');?>', '<?php esc_html_e('May','Total-Soft-Calendar');?>', '<?php esc_html_e('June','Total-Soft-Calendar');?>', '<?php esc_html_e('July','Total-Soft-Calendar');?>', '<?php esc_html_e('August','Total-Soft-Calendar');?>', '<?php esc_html_e('September','Total-Soft-Calendar');?>', '<?php esc_html_e('October','Total-Soft-Calendar');?>', '<?php esc_html_e('November','Total-Soft-Calendar');?>', '<?php esc_html_e('December','Total-Soft-Calendar');?>'],
                    textArrows: {
                        previous: '<i class="totalsoft totalsoft-<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_ArrType);?>-left"></i>',
                        next: '<i class="totalsoft totalsoft-<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_ArrType);?>-right"></i>'
                    },
                    eventTitle: '<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_Ev_HText);?>',
                    url: '',
                    events: [
						<?php for($i=0;$i<count($Total_Soft_CalEvents);$i++){
						    $TotalSoftCal_EvStartDate=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
						    if($TotalSoftCal_EvStartDate[1][0]==0){
						    	$TotalSoftCal_EvStartDate[1]=$TotalSoftCal_EvStartDate[1][1];
						    }
						    if($TotalSoftCal_EvStartDate[2][0]==0){
						    	$TotalSoftCal_EvStartDate[2]=$TotalSoftCal_EvStartDate[2][1];
						    }
						    $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate=implode('-',$TotalSoftCal_EvStartDate);
						    $TotalSoftCal_EvEndDate=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
						    if($TotalSoftCal_EvEndDate[1][0]==0){
						    	$TotalSoftCal_EvEndDate[1]=$TotalSoftCal_EvEndDate[1][1];
						    }
						    if($TotalSoftCal_EvEndDate[2][0]==0){
						    	$TotalSoftCal_EvEndDate[2]=$TotalSoftCal_EvEndDate[2][1];
						    }
						    $Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate=implode('-',$TotalSoftCal_EvEndDate);
						    if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab)=='none'){
						    	$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab='';
						    }
						    $Total_Soft_CalEventDesc=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_CalEvents[$i]->id));
						    $Total_Soft_CalEventRec=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_CalEvents[$i]->id));
						    $TotalSoftCal_EvStartDateSplit=explode('-',$Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate);
						    $TotalSoftCal_EvStartTimeSplit=explode(':',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime));
						    $TotalSoftCal_EvEndDateSplit=explode('-',$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate);
						?>
                        {
                            title: '<?php echo html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName);?>',
                            description: '<?php if($Total_Soft_CalEventDesc){
								echo html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc);
							}?>',
                            datetime: new Date(<?php echo esc_html($TotalSoftCal_EvStartDateSplit[0]);?>, <?php echo esc_html($TotalSoftCal_EvStartDateSplit[1]-1);?>, <?php echo esc_html($TotalSoftCal_EvStartDateSplit[2]);?>),
                            endtime: '<?php echo esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime);?>',
                            eventurl: "<?php echo $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != '' ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : '' ;?>",
                            eventnewtab: "<?php echo esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab);?>",
                            enddateyear: "<?php echo esc_html($TotalSoftCal_EvEndDateSplit[0]);?>",
                            enddatemonth: "<?php echo esc_html($TotalSoftCal_EvEndDateSplit[1]-1);?>",
                            enddateday: "<?php echo esc_html($TotalSoftCal_EvEndDateSplit[2]);?>",
                            timeformat: '<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_04);?>',
                            dateformat: '<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_05);?>',
                            enddatereal: "<?php echo esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate);?>",
                            eventimg: "<?php echo $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : '';?>",
                            eventvid: "<?php echo $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : '';?>",
                            eventvidpos: "<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_03);?>",
                            realstarttime: "<?php echo esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime);?>",
                            eventrec: "<?php echo esc_html($Total_Soft_CalEventRec[0]->TotalSoftCal_EvRec);?>",
                            eventshowdate: "<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_06);?>"
                        },
						<?php } ?>
                    ],
                    firstDayOfWeek: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal2_WDStart);?>
                });
            });
        </script>
		<?php }else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='Flexible Calendar'){
			$Total_Soft_CalEvents_Date     =array();
			$Total_Soft_CalEvents_Desc     =array();
			$Total_Soft_CalEvents_Date_Real=array();
			$Total_Soft_CalEvents_Desc_Real=array();
			for($i=0;$i<count($Total_Soft_CalEvents);$i++){
				$startdate=strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
				if(strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate))==""){
					$enddate=$startdate;
				}else{
					$enddate=strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
				}
				while($startdate<=$enddate){
					array_push($Total_Soft_CalEvents_Date,date("Y-m-d",$startdate));
					$startdate=strtotime("+1 day",$startdate);
				}
				if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab)=='none'){
					$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab='';
				}
				$Total_Soft_CalEventDesc=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal=%s order by id",esc_html($Total_Soft_CalEvents[$i]->id)));
				$TotalSoftcalEvent      ='';
				if($TotalSoftCal_Part[0]->TotalSoftCal_16=='1')
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent.= sprintf(
                            '
                                <div style="position: relative; width: 99%%; margin: 5px auto; text-align: center;">
                                    %1$s
                                </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ?
                                sprintf(
                                    '
                                    <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                    ',
                                    isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) && $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                    esc_html($Total_Soft_Cal)
                                ) 
                             : 
                                sprintf(
                                   '
                                    <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s"><iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                                   ',
                                   esc_html($Total_Soft_Cal),
                                   isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) &&  $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : ""
                                ) 
                        );
					}
				}
				if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL!=''){
					if($TotalSoftCal_Part[0]->TotalSoftCal_19=='1') // Link Before Title
					{
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">%5$s</p>
                            ',
                            esc_html($Total_Soft_Cal),
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_19=='2') // Link After Title
					{
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">%5$s</p>
                            <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            ',
                            esc_html($Total_Soft_Cal),
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_19=='3') // Link After Title Text
					{
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">%5$s
                                <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkMar TotalSoftcalEvent_LinkMar_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            </p>    
                            ',
                            esc_html($Total_Soft_Cal),
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else{
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">%2$s</p>    
                            ',
                            esc_html($Total_Soft_Cal),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}
				}else{
                    $TotalSoftcalEvent .= sprintf(
                        '
                        <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">%2$s</p>    
                        ',
                        esc_html($Total_Soft_Cal),
                        esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                    );
                }
				$FltimestartPeriod='AM';
				$FltimeendPeriod  ='AM';
				if(esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01)=='12'){
					$TotalSoftCal_EvStartTimeSplit=explode(':',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime));
					$TotalSoftCal_EvEndTimeSplit  =explode(':',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime));
					if($TotalSoftCal_EvStartTimeSplit[0]>=12){
						if($TotalSoftCal_EvStartTimeSplit[0]>=22){
							$FlCstartTime=($TotalSoftCal_EvStartTimeSplit[0]-12).':'.$TotalSoftCal_EvStartTimeSplit[1];
						}else{
							$FlCstartTime='0'.($TotalSoftCal_EvStartTimeSplit[0]-12).':'.$TotalSoftCal_EvStartTimeSplit[1];
						}
						$FltimestartPeriod='PM';
					}else{
						$FlCstartTime=$TotalSoftCal_EvStartTimeSplit[0].':'.$TotalSoftCal_EvStartTimeSplit[1];
					}
					if($FlCstartTime==0){
						$FlCstartTime='12:'.$TotalSoftCal_EvStartTimeSplit[1];
					}
					$timeFlcalreal=$FlCstartTime.' '.$FltimestartPeriod;
					if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime)!=''&&esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime)!=esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime)){
						if($TotalSoftCal_EvEndTimeSplit[0]>=12){
							if($TotalSoftCal_EvEndTimeSplit[0]>=22){
								$FlCendTime=($TotalSoftCal_EvEndTimeSplit[0]-12).':'.$TotalSoftCal_EvEndTimeSplit[1];
							}else{
								$FlCendTime='0'+($TotalSoftCal_EvEndTimeSplit[0]-12).':'.$TotalSoftCal_EvEndTimeSplit[1];
							}
							$FltimeendPeriod='PM';
						}else{
							$FlCendTime=$TotalSoftCal_EvEndTimeSplit[0].':'.$TotalSoftCal_EvEndTimeSplit[1];
						}
						if($FlCendTime==0){
							$FlCendTime='12:'.$TotalSoftCal_EvEndTimeSplit[1];
						}
						$timeFlcalreal.=' - '.$FlCendTime.' '.$FltimeendPeriod;
					}
				}else{
					$FltimestartPeriod='';
					$FltimeendPeriod  ='';
					$timeFlcalreal    =esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime);
					if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime)!=''&&esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime)!=esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime)){
						$timeFlcalreal.=' - '.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime);
					}
				}
				if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate)==esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate)||esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate)=='--'||esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate)==''){
					$TotalSoftCal_EvStartDateSplit=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
					$TotalSoft_Date_Months        =array(
						'January',
						'February',
						'March',
						'April',
						'May',
						'June',
						'July',
						'August',
						'September',
						'October',
						'November',
						'December'
					);
					if($TotalSoftCal_Part[0]->TotalSoftCal_28==''){
						$TotalSoftCal_EvStartDate=esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate);
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd.mm.yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].'.'.$TotalSoftCal_EvStartDateSplit[1].'.'.$TotalSoftCal_EvStartDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='yy MM dd'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[0].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd-mm-yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd MM yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='mm-dd-yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='MM dd, yy'){
						$TotalSoftCal_EvStartDate=$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2].', '.$TotalSoftCal_EvStartDateSplit[0];
					}
                    $TotalSoftcalEvent .= sprintf(
                        '
                        <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">
                            %2$s
                            %3$s
                        </p>    
                        ',
                        esc_html($Total_Soft_Cal),
                        esc_html($TotalSoftCal_EvStartDate),
                        $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime!='' ? sprintf('<span style="margin-left: 10px;">%1$s</span>',esc_html($timeFlcalreal)) : ""
                    );

				}else{
					$TotalSoftCal_EvStartDateSplit=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
					$TotalSoft_Date_Months        =array(
						'January',
						'February',
						'March',
						'April',
						'May',
						'June',
						'July',
						'August',
						'September',
						'October',
						'November',
						'December'
					);
					$TotalSoftCal_EvEndDateSplit  =explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
					if($TotalSoftCal_Part[0]->TotalSoftCal_28==''){
						$TotalSoftCal_EvStartDate=esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate);
						$TotalSoftCal_EvEndDate  =esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate);
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd.mm.yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].'.'.$TotalSoftCal_EvStartDateSplit[1].'.'.$TotalSoftCal_EvStartDateSplit[0];
						$TotalSoftCal_EvEndDate  =$TotalSoftCal_EvEndDateSplit[2].'.'.$TotalSoftCal_EvEndDateSplit[1].'.'.$TotalSoftCal_EvEndDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='yy MM dd'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[0].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2];
						$TotalSoftCal_EvEndDate  =$TotalSoftCal_EvEndDateSplit[0].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[2];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd-mm-yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[0];
						$TotalSoftCal_EvEndDate  =$TotalSoftCal_EvEndDateSplit[2].'-'.$TotalSoftCal_EvEndDateSplit[1].'-'.$TotalSoftCal_EvEndDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='dd MM yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[0];
						$TotalSoftCal_EvEndDate  =$TotalSoftCal_EvEndDateSplit[2].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='mm-dd-yy'){
						$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[0];
						$TotalSoftCal_EvEndDate  =$TotalSoftCal_EvEndDateSplit[1].'-'.$TotalSoftCal_EvEndDateSplit[2].'-'.$TotalSoftCal_EvEndDateSplit[0];
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_28=='MM dd, yy'){
						$TotalSoftCal_EvStartDate=$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2].', '.$TotalSoftCal_EvStartDateSplit[0];
						$TotalSoftCal_EvEndDate  =$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[2].', '.$TotalSoftCal_EvStartDateSplit[0];
					}
                    $TotalSoftcalEvent .= sprintf(
                        '
                        <p class="TotalSoftcalEvent_Title TotalSoftcalEvent_Title_%1$s">
                            %2$s
                            %3$s
                        </p>    
                        ',
                        esc_html($Total_Soft_Cal),
                        esc_html($TotalSoftCal_EvStartDate). " / " .esc_html($TotalSoftCal_EvEndDate),
                        $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime!='' ? sprintf('<span style="margin-left: 10px;">%1$s</span>',esc_html($timeFlcalreal)) : ""
                    );
				}
				if($TotalSoftCal_Part[0]->TotalSoftCal_16=='2') // Media After Title
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <div style="position: relative; width: 99%; margin: 5px auto; text-align: center;">
                                %1$s
                            </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ? 
                            sprintf(
                                '
                                    <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                ',
                                isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) && $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                esc_html($Total_Soft_Cal)
                            ) : 
                            sprintf(
                                '
                                <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s">
                                    <iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                ',
                                esc_html($Total_Soft_Cal)),
                                isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) && $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : ""
                        );
					}
				}
				if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL!=''){
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc!=''){
						if($TotalSoftCal_Part[0]->TotalSoftCal_19=='4') // Link After Description
						{
                            $TotalSoftcalEvent .= sprintf(
                                '
                                    %2$s
                                    <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%3$s" target="%4$s">%5$s</a>
                                ',
                                esc_html($Total_Soft_Cal),
                                html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc),
                                isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                                isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                                isset($TotalSoftCal_Part[0]->TotalSoftCal_20) &&  $TotalSoftCal_Part[0]->TotalSoftCal_20 != "" ? esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20) : "",
                            );
						}else if($TotalSoftCal_Part[0]->TotalSoftCal_19=='5') // Link After Description Text
						{
                            $TotalSoftcalEvent .= sprintf(
                                '
                                    %2$s
                                    <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkMar TotalSoftcalEvent_LinkMar_%1$s" href="%3$s" target="%4$s">%5$s</a>
                                ',
                                esc_html($Total_Soft_Cal),
                                html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc),
                                isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                                isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                                isset($TotalSoftCal_Part[0]->TotalSoftCal_20) &&  $TotalSoftCal_Part[0]->TotalSoftCal_20 != "" ? esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20) : "",
                            );
						}else{
							$TotalSoftcalEvent.=html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc);
						}
					}else{
                        $TotalSoftcalEvent .= sprintf(
                            '
                                %2$s
                                <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%3$s" target="%4$s">%5$s</a>
                            ',
                            esc_html($Total_Soft_Cal),
                            html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc),
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            isset($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) &&  $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab != "" ? esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab) : "",
                            isset($TotalSoftCal_Part[0]->TotalSoftCal_20) &&  $TotalSoftCal_Part[0]->TotalSoftCal_20 != "" ? esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20) : ""
                        );
					}
				}else{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc!=''){
						$TotalSoftcalEvent.=html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc);
					}
				}
				if($TotalSoftCal_Part[0]->TotalSoftCal_16=='3') // Media After Description
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent .= sprintf(
                            '
                            <div style="position: relative; width: 99%; margin: 10px auto; text-align: center;">
                                %1$s
                            </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ? 
                            sprintf(
                                '
                                <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                ',
                                isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) && $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                esc_html($Total_Soft_Cal)
                            ) : 
                            sprintf(
                                '
                                <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s">
                                    <iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                ',
                                esc_html($Total_Soft_Cal),
                                isset($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) && $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : ""
                            ),
                        );
					}
				}
                $TotalSoftcalEvent .= sprintf(
                    '
                    <div class="TotalSoftcalEvent_LAE TotalSoftcalEvent_LAE_%1$s"></div>
                    ',
                    esc_html($Total_Soft_Cal)
                );
				$startdate        =strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
				if(strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate))==""){
					$enddate=$startdate;
				}else{
					$enddate=strtotime(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
				}
				while($startdate<=$enddate){
					array_push($Total_Soft_CalEvents_Desc,$TotalSoftcalEvent);
					$startdate=strtotime("+1 day",$startdate);
				}
			}
			$Total_Soft_CalEvents_Date1=array();
			$Total_Soft_CalEvents_Desc1=array();
			for($i=0;$i<count($Total_Soft_CalEvents_Date1);$i++){
				array_push($Total_Soft_CalEvents_Date,$Total_Soft_CalEvents_Date1[$i]);
				array_push($Total_Soft_CalEvents_Desc,$Total_Soft_CalEvents_Desc1[$i]);
			}
			for($i=0;$i<count($Total_Soft_CalEvents_Date);$i++){
				if($Total_Soft_CalEvents_Date[$i]!=''||$Total_Soft_CalEvents_Date[$i]!=NULL){
					for($j=$i;$j<count($Total_Soft_CalEvents_Date)-1;$j++){
						if($Total_Soft_CalEvents_Date[$i]===$Total_Soft_CalEvents_Date[$j+1]){
							$Total_Soft_CalEvents_Date[$j+1]='';
							$Total_Soft_CalEvents_Desc[$i]  =$Total_Soft_CalEvents_Desc[$i].$Total_Soft_CalEvents_Desc[$j+1];
							$Total_Soft_CalEvents_Desc[$j+1]='';
						}
					}
				}
			}
			for($i=0;$i<count($Total_Soft_CalEvents_Date);$i++){
				if($Total_Soft_CalEvents_Date[$i]!=''){
                     
					array_push($Total_Soft_CalEvents_Date_Real,$Total_Soft_CalEvents_Date[$i]);
					array_push($Total_Soft_CalEvents_Desc_Real,wp_kses_post($Total_Soft_CalEvents_Desc[$i]));
				}
			} 
        
            wp_register_style("ts_calendar_styles_css", plugins_url('../CSS/calendar.css',__FILE__), []);
            wp_enqueue_style("ts_calendar_styles_css");
        ?>
        <style type="text/css">
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                max-width: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_MW);?>px;
                position: relative;
                z-index: 0;
            }

            <?php if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShShow=='Yes'){ ?>
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='1'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                -webkit-box-shadow: 0 30px 22px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 30px 22px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0 30px 22px -18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='2'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                -webkit-box-shadow: 0px 0px 22px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0px 0px 22px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0px 0px 22px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='3'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='4'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='5'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='6'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                right: 10px;
                left: auto;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='7'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 25px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                transform: rotate(-8deg);
                -moz-transform: rotate(-8deg);
                -webkit-transform: rotate(-8deg);
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(8deg);
                -moz-transform: rotate(8deg);
                -webkit-transform: rotate(8deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='8'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                top: 50%;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='9'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                top: 0;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='10'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?> inset;
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                top: 10px;
                bottom: 10px;
                left: 0;
                right: 0;
                border-radius: 100px / 10px;
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='11'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?>:before, .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                position: absolute;
                content: "";
                box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                top: 40px;
                left: 20px;
                bottom: 50px;
                width: 15%;
                z-index: -1;
                -webkit-transform: rotate(-5deg);
                -moz-transform: rotate(-5deg);
                transform: rotate(-5deg);
            }

            .main_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                -webkit-transform: rotate(5deg);
                -moz-transform: rotate(5deg);
                transform: rotate(5deg);
                right: 20px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='12'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='13'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='14'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='15'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='16'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='17'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShType=='18'){ ?>
            .main_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -moz-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
                -webkit-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BoxShC);?>;
            }

            <?php }?>
            <?php }?>
            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div:empty {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BgC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div:empty:hover {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BgC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row {
                border-bottom: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_GrC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div {
                border-right: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_GrC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-body {
            <?php if(strrpos(esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BBC),"0)") < 1){ ?> border: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_BBC);?>;
            <?php }?>
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_BgC);?>;
                border-top: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_BTW);?>px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_BTC);?>;
                border-bottom: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_LAH_W);?>px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_LAH_C);?>;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> h3 {
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_FF);?> !important;
                text-transform: none !important;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> h3.custom-data_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                top: 50%;
                -ms-transform: translateY(-50%);
                -webkit-transform: translateY(-50%);
                -moz-transform: translateY(-50%);
                -o-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> .custom-month {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_MFS);?>px !important;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_MC);?> !important;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> .custom-year {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_YFS);?>px !important;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_H_YC);?> !important;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> nav i {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Arr_S);?>px;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> nav i:before {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Arr_C);?>;
            }

            .custom-header_<?php echo esc_html($Total_Soft_Cal); ?> nav i:hover:before {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Arr_HC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-head {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_WD_BgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_WD_C);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_WD_FS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_WD_FF);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_D_BgC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div > span.fc-date {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_D_C);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div.fc-today {
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_TD_BgC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div.fc-today > span.fc-date {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_TD_C);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div:hover {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_HD_BgC);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div:hover span.fc-date {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_HD_C);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div.fc-content:after {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_ED_C);?>;
            }

            .fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?> .fc-calendar .fc-row > div.fc-content:hover:after {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_ED_HC);?>;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?> h4 {
                border-top: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_BTW);?>px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_BTC);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_BgC);?>;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_C);?> !important;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FS);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_FF);?>;
                border-bottom: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_06);?>px solid <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_07);?>;
                text-transform: none !important;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?> i.custom-content-close {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_03);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_05);?>px;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?> i.custom-content-close:hover {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_04);?>;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?> {
                background-color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_08);?>;
                border: 1px solid<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_09);?>;
                border-top: none;
                overflow: auto;
            }

            .TotalSoftcalEvent_Title_<?php echo esc_html($Total_Soft_Cal); ?> {
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_10);?>px !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_11);?> !important;
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_13);?> !important;
                background-color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_12);?> !important;
                text-align: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_14);?> !important;
                padding: 5px 10px !important;
                margin: 10px 0 !important;
            }

            .TotalSoftcalEvent_Link_<?php echo esc_html($Total_Soft_Cal); ?> {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_17);?> !important;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_23);?>px !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_24);?> !important;
                border: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_25);?>px solid <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_26);?> !important;
                border-radius: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_27);?>px !important;
                padding: 5px 10px !important;
                box-shadow: none !important;
                margin: 10px auto !important;
                display: block;
                width: max-content;
            }

            .TotalSoftcalEvent_LinkMar_<?php echo esc_html($Total_Soft_Cal); ?> {
                margin: 0px 10px;
            }

            .TotalSoftcalEvent_Link_<?php echo esc_html($Total_Soft_Cal); ?>:hover {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_18);?> !important;
                text-decoration: none;
            }

            .TotalSoftcalEvent_Media_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15);?>%;
                height: auto;
                display: inline !important;
            }

            .TotalSoftcalEvent_Mediadiv_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15);?>%;
                position: relative;
                display: inline-block;
            }

            .TotalSoftcalEvent_Mediadiv_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                padding-top: 56.25% !important;
                display: block;
                content: '';
            }

            .TotalSoftcalEvent_Mediaiframe_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: 100% !important;
                height: 100% !important;
                left: 0;
                position: absolute;
            }

            .TotalSoftcalEvent_LAE_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: 85%;
                position: relative;
                margin: 10px auto !important;
                border-top: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_21);?>px solid <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_22);?>;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-webkit-scrollbar {
                width: 10px;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-webkit-scrollbar-thumb {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_BTC);?>;
                outline: 1px solid slategrey;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-moz-scrollbar {
                width: 10px;
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-moz-scrollbar-track {
                -moz-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            }

            #custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>::-moz-scrollbar-thumb {
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_BTC);?>;
                outline: 1px solid slategrey;
            }

            #custom-month_<?php echo esc_html($Total_Soft_Cal); ?> {
                background-color: transparent !important;
                padding: 0px !important;
                width: 100% !important;
            }

            #custom-year_<?php echo esc_html($Total_Soft_Cal); ?> {
                background-color: transparent !important;
            }

            #custom-month_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                display: none !important;
            }

            #custom-year_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                display: none !important;
            }
        </style>
        <?php 
            wp_register_script("ts_calendar_scripts_js", plugins_url('../JS/modernizr.custom.63321.js',__FILE__), ['jquery']);
            wp_enqueue_script("ts_calendar_scripts_js");
        ?>
        <div class="container tscalcontainer tscalcontainer_<?php echo esc_html($Total_Soft_Cal); ?>">
            <section class="main main_<?php echo esc_html($Total_Soft_Cal); ?>">
                <div class="custom-calendar-wrap">
                    <div id="custom-inner_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-inner">
                        <div class="custom-header clearfix custom-header_<?php echo esc_html($Total_Soft_Cal); ?>">
                            <nav>
                                <i id="custom-prev_<?php echo esc_html($Total_Soft_Cal); ?>"
                                   class="totalsoft totalsoft-<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Arr_Type); ?>-left "></i>
                                <i id="custom-next_<?php echo esc_html($Total_Soft_Cal); ?>"
                                   class="totalsoft totalsoft-<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_Arr_Type); ?>-right"></i>
                            </nav>
													<?php if($TotalSoftCal_Par[0]->TotalSoftCal3_H_Format=='1'){ ?>
                              <h3 id="custom-year_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-year"></h3>
                              <h3 id="custom-month_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-month"></h3>
													<?php }else if($TotalSoftCal_Par[0]->TotalSoftCal3_H_Format=='2'){ ?>
                              <h3 id="custom-month_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-month"></h3>
                              <h3 id="custom-year_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-year"></h3>
													<?php }else if($TotalSoftCal_Par[0]->TotalSoftCal3_H_Format=='3'){ ?>
                              <h3 class="custom-data_<?php echo esc_html($Total_Soft_Cal); ?>">
                                  <span id="custom-year_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-year"></span>
                                  <span id="custom-month_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-month"></span>
                              </h3>
													<?php }else{ ?>
                              <h3 class="custom-data_<?php echo esc_html($Total_Soft_Cal); ?>">
                                  <span id="custom-month_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-month"></span>
                                  <span id="custom-year_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-year"></span>
                              </h3>
													<?php } ?>
                        </div>
                        <div id="calendar_<?php echo esc_html($Total_Soft_Cal); ?>"
                             class="fc-calendar-container fc-calendar-container_<?php echo esc_html($Total_Soft_Cal); ?>"></div>
                    </div>
                </div>
            </section>
        </div><!-- /container -->
        <?php 
            wp_register_script("ts_calendar_scripts_calendario", plugins_url('../JS/jquery.calendario.js',__FILE__), ['jquery']);
            wp_enqueue_script("ts_calendar_scripts_calendario");
        ?>
        <script type="text/javascript">
            var codropsEvents_<?php echo esc_html($Total_Soft_Cal); ?> = {
							<?php for($i=0;$i<count($Total_Soft_CalEvents_Date_Real);$i++){ ?>
                '<?php echo esc_html($Total_Soft_CalEvents_Date_Real[$i]);?>': `<?php echo wp_kses_post(html_entity_decode( $Total_Soft_CalEvents_Desc_Real[$i]));?>`,
							<?php }?>
            };
        </script>
        <script type="text/javascript">
            jQuery(function () {
                var transEndEventNames = {
                        'WebkitTransition': 'webkitTransitionEnd',
                        'MozTransition': 'transitionend',
                        'OTransition': 'oTransitionEnd',
                        'msTransition': 'MSTransitionEnd',
                        'transition': 'transitionend'
                    },
                    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
                    $wrapper = jQuery('#custom-inner_<?php echo esc_html($Total_Soft_Cal); ?>'),
                    $calendar = jQuery('#calendar_<?php echo esc_html($Total_Soft_Cal); ?>'),
                    cal = $calendar.calendario({
                        onDayClick: function ($el, $contentEl, dateProperties) {
                            if ($contentEl.length > 0) {
                                showEvents($contentEl, dateProperties);
                            }
                        },
                        caldata: codropsEvents_<?php echo esc_html($Total_Soft_Cal); ?>,
                        weekabbrs: ['<?php esc_html_e('Sun','Total-Soft-Calendar');?>', '<?php esc_html_e('Mon','Total-Soft-Calendar');?>', '<?php esc_html_e('Tue','Total-Soft-Calendar');?>', '<?php esc_html_e('Wed','Total-Soft-Calendar');?>', '<?php esc_html_e('Thu','Total-Soft-Calendar');?>', '<?php esc_html_e('Fri','Total-Soft-Calendar');?>', '<?php esc_html_e('Sat','Total-Soft-Calendar');?>'],
                        months: ['<?php esc_html_e('January','Total-Soft-Calendar');?>', '<?php esc_html_e('February','Total-Soft-Calendar');?>', '<?php esc_html_e('March','Total-Soft-Calendar');?>', '<?php esc_html_e('April','Total-Soft-Calendar');?>', '<?php esc_html_e('May','Total-Soft-Calendar');?>', '<?php esc_html_e('June','Total-Soft-Calendar');?>', '<?php esc_html_e('July','Total-Soft-Calendar');?>', '<?php esc_html_e('August','Total-Soft-Calendar');?>', '<?php esc_html_e('September','Total-Soft-Calendar');?>', '<?php esc_html_e('October','Total-Soft-Calendar');?>', '<?php esc_html_e('November','Total-Soft-Calendar');?>', '<?php esc_html_e('December','Total-Soft-Calendar');?>'],
                        displayWeekAbbr: true,
                        displayMonthAbbr: false,
                        startIn: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal3_WDStart);?>,
                    }),
                    $month = jQuery('#custom-month_<?php echo esc_html($Total_Soft_Cal); ?>').html(cal.getMonthName()),
                    $year = jQuery('#custom-year_<?php echo esc_html($Total_Soft_Cal); ?>').html(cal.getYear());
                jQuery('#custom-next_<?php echo esc_html($Total_Soft_Cal); ?>').on('click', function () {
                    cal.gotoNextMonth(updateMonthYear);
                });
                jQuery('#custom-prev_<?php echo esc_html($Total_Soft_Cal); ?>').on('click', function () {
                    cal.gotoPreviousMonth(updateMonthYear);
                });

                function updateMonthYear() {
                    $month.html(cal.getMonthName());
                    $year.html(cal.getYear());
                }

                // just an example..
                function showEvents($contentEl, dateProperties) {
                    hideEvents();
									<?php if($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_Format=='1'){ ?>
                    var $events = jQuery('<div id="custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-content-reveal"><h4>' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>'),
											<?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_Format=='2'){ ?>
                    var $events = jQuery('<div id="custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-content-reveal"><h4>' + dateProperties.year + ' ' + dateProperties.monthname + ' ' + dateProperties.day + '</h4></div>'),
									<?php } else if($TotalSoftCal_Par[0]->TotalSoftCal3_Ev_Format=='3'){ ?>
                    var $events = jQuery('<div id="custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>" class="custom-content-reveal"><h4>' + dateProperties.day + ' ' + dateProperties.monthname + ' ' + dateProperties.year + '</h4></div>'),
											<?php }?>
                        $close = jQuery('<i class="custom-content-close totalsoft totalsoft-<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>"></i>').on('click', hideEvents);
                    $events.append($contentEl.html(), $close).insertAfter($wrapper);
                    setTimeout(function () {
                        $events.css('top', '0%');
                    }, 25);
                }

                function hideEvents() {
                    var $events = jQuery('#custom-content-reveal_<?php echo esc_html($Total_Soft_Cal); ?>');
                    if ($events.length > 0) {
                        $events.css('top', '100%');
                        Modernizr.csstransitions ? $events.on(transEndEventName, function () {
                            jQuery(this).remove();
                        }) : $events.remove();
                    }
                }
            });
        </script>
		<?php }else if($TotalSoftCal_Type[0]->TotalSoftCal_Type=='TimeLine Calendar'){
			$Total_Soft_CalEvents_Date     =array();
			$Total_Soft_CalEvents_Desc     =array();
			$Total_Soft_CalEvents_Date_Real=array();
			$Total_Soft_CalEvents_Desc_Real=array();
			for($i=0;$i<count($Total_Soft_CalEvents);$i++){
				if(esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab)=='none'){
					$Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab='';
				}
				$Total_Soft_CalEventDesc=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal=%s order by id",esc_html($Total_Soft_CalEvents[$i]->id)));
				$TotalSoftcalEvent_Part = "";
                if(esc_html($TotalSoftCal_Part[0]->TotalSoftCal_11)=='1') // Media Before Title
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <div style="position: relative; width: 99%; margin: 5px auto; text-align: center;">
                                %1$s
                            </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ? 
                            sprintf(
                                '
                                <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                ',
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                esc_html($Total_Soft_Cal)
                            ) : 
                            sprintf(
                                '
                                <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s">
                                    <iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                ',
                                esc_html($Total_Soft_Cal),
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : "",
                            )
                        );
					}
				}
				if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL!=''){
					if($TotalSoftCal_Part[0]->TotalSoftCal_14=='1') // Link Before Title
					{
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            <h3>%5$s</h3>
                            ',
                            esc_html($Total_Soft_Cal),
                            $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab),
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_14=='2') // Link After Title
					{
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <h3>%5$s</h3>
                            <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            ',
                            esc_html($Total_Soft_Cal),
                            $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab),
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else if($TotalSoftCal_Part[0]->TotalSoftCal_14=='3') // Link After Title Text
					{
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <h3>
                                %5$s
                                <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%1$s TotalSoftcalEvent_LinkMar TotalSoftcalEvent_LinkMar_%1$s" href="%2$s" target="%3$s">%4$s</a>
                            </h3>
                            ',
                            esc_html($Total_Soft_Cal),
                            $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab),
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}else{
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <h3>
                                %1$s
                            </h3>
                            ',
                            esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                        );
					}
				}else{
                    $TotalSoftcalEvent_Part .= sprintf(
                        '
                        <h3>
                            %1$s
                        </h3>
                        ',
                        esc_html(html_entity_decode($Total_Soft_CalEvents[$i]->TotalSoftCal_EvName))
                    );
                }
				if($TotalSoftCal_Part[0]->TotalSoftCal_11=='2') // Media After Title
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <div style="position: relative; width: 99%; margin: 5px auto; text-align: center;">
                                %1$s
                            </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ? 
                            sprintf(
                                '
                                <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                ',
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                esc_html($Total_Soft_Cal)
                            ) : 
                            sprintf(
                                '
                                <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s">
                                    <iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                ',
                                esc_html($Total_Soft_Cal),
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : "",
                            )
                        );
					}
				}
				if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL!=''){
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc!=''){
						if($TotalSoftCal_Part[0]->TotalSoftCal_14=='4') // Link After Description
						{
                            $TotalSoftcalEvent_Part .= sprintf(
                                '
                                %1$s
                                <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%2$s TotalSoftcalEvent_LinkBl TotalSoftcalEvent_LinkBl_%2$s" href="%3$s" target="%4$s">%5$s</a>
                                ',
                                do_shortcode(html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc)),
                                esc_html($Total_Soft_Cal),
                                $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                                esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab),
                                esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            );

						}else if($TotalSoftCal_Part[0]->TotalSoftCal_14=='5') // Link After Description Text
						{
                            $TotalSoftcalEvent_Part .= sprintf(
                                '
                                %1$s
                                <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%2$s TotalSoftcalEvent_LinkMar TotalSoftcalEvent_LinkMar_%2$s" href="%3$s" target="%4$s">%5$s</a>
                                ',
                                do_shortcode(html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc)),
                                esc_html($Total_Soft_Cal),
                                $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                                esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab),
                                esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            );
						}else{
							$TotalSoftcalEvent_Part.=do_shortcode(html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc));
						}
					}else{
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <a class="TotalSoftcalEvent_Link TotalSoftcalEvent_Link_%2$s TotalSoftcalEvent_LinkBl_ TotalSoftcalEvent_LinkBl__%2$s" href="%3$s" target="%4$s">%1$s</a>
                            ',
                            esc_html($TotalSoftCal_Part[0]->TotalSoftCal_15),
                            esc_html($Total_Soft_Cal),
                            $Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL != "" ? esc_url($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURL) : "",
                            esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvURLNewTab)
                        );
					}
				}else{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc!=''){
						$TotalSoftcalEvent_Part.=do_shortcode(html_entity_decode($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvDesc));
					}
				}
				if($TotalSoftCal_Part[0]->TotalSoftCal_11=='3') // Media After Description
				{
					if($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Iframe!=''){
                        $TotalSoftcalEvent_Part .= sprintf(
                            '
                            <div style="position: relative; width: 99%; margin: 10px auto; text-align: center;">
                                %1$s
                            </div>
                            ',
                            $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src=='' ? 
                            sprintf(
                                '
                                <img src="%1$s" class="TotalSoftcalEvent_Media TotalSoftcalEvent_Media_%2$s">
                                ',
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvImg) : "",
                                esc_html($Total_Soft_Cal)
                            ) : 
                            sprintf(
                                '
                                <div class="TotalSoftcalEvent_Mediadiv TotalSoftcalEvent_Mediadiv_%1$s">
                                    <iframe src="%2$s" class="TotalSoftcalEvent_Mediaiframe TotalSoftcalEvent_Mediaiframe_%1$s" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                ',
                                esc_html($Total_Soft_Cal),
                                $Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src != "" ? esc_url($Total_Soft_CalEventDesc[0]->TotalSoftCal_EvVid_Src) : "",
                            )
                        );
					}
				}

				$TotalSoftcalEvent = sprintf(
                    '
                    <div class="layout1">
                        %1$s
                    </div>
                    ',
                    $TotalSoftcalEvent_Part
                );

				$FltimestartPeriod='AM';
				$FltimeendPeriod  ='AM';
				if($TotalSoftCal_Part[0]->TotalSoftCal_04=='12'){
					$TotalSoftCal_EvStartTimeSplit=explode(':',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime));
					$TotalSoftCal_EvEndTimeSplit  =explode(':',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime));
                    if($TotalSoftCal_EvStartTimeSplit[0]>=12){
						if($TotalSoftCal_EvStartTimeSplit[0]>=22){
							$FlCstartTime=($TotalSoftCal_EvStartTimeSplit[0]-12).':'.$TotalSoftCal_EvStartTimeSplit[1];
						}else{
							$FlCstartTime='0'.($TotalSoftCal_EvStartTimeSplit[0]-12).':'.$TotalSoftCal_EvStartTimeSplit[1];
						}
						$FltimestartPeriod='PM';
					}else{
						$FlCstartTime=$TotalSoftCal_EvStartTimeSplit[0].':'.$TotalSoftCal_EvStartTimeSplit[1];
					}
					if($FlCstartTime==0){
						$FlCstartTime='12:'.$TotalSoftCal_EvStartTimeSplit[1];
					}
					$timeFlcalreal=$FlCstartTime.' '.$FltimestartPeriod;
					if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime!=''&&$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime!=$Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime){
						if($TotalSoftCal_EvEndTimeSplit[0]>=12){
							if($TotalSoftCal_EvEndTimeSplit[0]>=22){
								$FlCendTime=($TotalSoftCal_EvEndTimeSplit[0]-12).':'.$TotalSoftCal_EvEndTimeSplit[1];
							}else{
								$FlCendTime='0'+($TotalSoftCal_EvEndTimeSplit[0]-12).':'.$TotalSoftCal_EvEndTimeSplit[1];
							}
							$FltimeendPeriod='PM';
						}else{
							$FlCendTime=$TotalSoftCal_EvEndTimeSplit[0].':'.$TotalSoftCal_EvEndTimeSplit[1];
						}
						if($FlCendTime==0){
							$FlCendTime='12:'.$TotalSoftCal_EvEndTimeSplit[1];
						}
						$timeFlcalreal.=' - '.$FlCendTime.' '.$FltimeendPeriod;
					}
				}else{
					$FltimestartPeriod='';
					$FltimeendPeriod  ='';
					$timeFlcalreal    =esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime);
					if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime!=''&&$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime!=$Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime){
						$timeFlcalreal.=' - '.esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndTime);
					}
				}
				$TotalSoftCal_EvStartDateSplit=explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
				$TotalSoft_Date_Months        =array(
					'January',
					'February',
					'March',
					'April',
					'May',
					'June',
					'July',
					'August',
					'September',
					'October',
					'November',
					'December'
				);
				$TotalSoftCal_EvEndDateSplit  =explode('-',esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate));
				if($TotalSoftCal_Part[0]->TotalSoftCal_03=='yy-mm-dd'){
					$TotalSoftCal_EvStartDate=implode('-',$TotalSoftCal_EvStartDateSplit);
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=implode('-',$TotalSoftCal_EvEndDateSplit);
					}
				}else if($TotalSoftCal_Part[0]->TotalSoftCal_03=='yy MM dd'){
					$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[0].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2];
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=$TotalSoftCal_EvEndDateSplit[0].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[2];
					}
				}else if($TotalSoftCal_Part[0]->TotalSoftCal_03=='dd-mm-yy'){
					$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[0];
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=$TotalSoftCal_EvEndDateSplit[2].'-'.$TotalSoftCal_EvEndDateSplit[1].'-'.$TotalSoftCal_EvEndDateSplit[0];
					}
				}else if($TotalSoftCal_Part[0]->TotalSoftCal_03=='dd MM yy'){
					$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[2].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[0];
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=$TotalSoftCal_EvEndDateSplit[2].' '.$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[0];
					}
				}else if($TotalSoftCal_Part[0]->TotalSoftCal_03=='mm-dd-yy'){
					$TotalSoftCal_EvStartDate=$TotalSoftCal_EvStartDateSplit[1].'-'.$TotalSoftCal_EvStartDateSplit[2].'-'.$TotalSoftCal_EvStartDateSplit[0];
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=$TotalSoftCal_EvEndDateSplit[1].'-'.$TotalSoftCal_EvEndDateSplit[2].'-'.$TotalSoftCal_EvEndDateSplit[0];
					}
				}else if($TotalSoftCal_Part[0]->TotalSoftCal_03=='MM dd, yy'){
					$TotalSoftCal_EvStartDate=$TotalSoft_Date_Months[intval($TotalSoftCal_EvStartDateSplit[1])-1].' '.$TotalSoftCal_EvStartDateSplit[2].', '.$TotalSoftCal_EvStartDateSplit[0];
					if($TotalSoftCal_EvEndDateSplit){
						$TotalSoftCal_EvEndDate=$TotalSoft_Date_Months[intval($TotalSoftCal_EvEndDateSplit[1])-1].' '.$TotalSoftCal_EvEndDateSplit[2].', '.$TotalSoftCal_EvEndDateSplit[0];
					}
				}

                $TotalSoftcalEvent_Part_Two = "";
				if($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate==$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate||$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate=='--'||$Total_Soft_CalEvents[$i]->TotalSoftCal_EvEndDate==''){
					$TotalSoftcalEvent_Part_Two .= sprintf(
                        '
                            <span style="background:%1$s">
                                %2$s
                                %3$s
                            </span>
                        ',
                        esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvColor),
                        esc_html($TotalSoftCal_EvStartDate),
                        $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime!='' ? sprintf('<span style="margin-left: 10px;">%1$s</span>',esc_html($timeFlcalreal)) : ""
                    );
				}else{
					$TotalSoftcalEvent_Part_Two .= sprintf(
                        '
                            <span style="background:%1$s">
                                %2$s
                                %3$s
                            </span>
                        ',
                        esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvColor),
                        esc_html($TotalSoftCal_EvStartDate). " / " .esc_html($TotalSoftCal_EvEndDate),
                        $Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartTime!='' ? sprintf('<span style="margin-left: 10px;">%1$s</span>',esc_html($timeFlcalreal)) : ""
                    );
				}


                $TotalSoftcalEvent .= sprintf(
                    '
                    <span class="date">
                        <i class="totalsoft totalsoft-%2$s" style="background:%3$s"></i>
                        %4$s
                    </span>
                    <div class="TotalSoftcalEvent_LAE TotalSoftcalEvent_LAE_%1$s"></div>
                    ',
                    esc_html($Total_Soft_Cal),
                    esc_html($TotalSoftCal_Part[0]->TotalSoftCal_27),
                    esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvColor),
                    $TotalSoftcalEvent_Part_Two
                );
				array_push($Total_Soft_CalEvents_Date,esc_html($Total_Soft_CalEvents[$i]->TotalSoftCal_EvStartDate));
				array_push($Total_Soft_CalEvents_Desc,$TotalSoftcalEvent);
			}
			$Total_Soft_CalEvents_Date1=array();
			$Total_Soft_CalEvents_Desc1=array();
			for($i=0;$i<count($Total_Soft_CalEvents_Date);$i++){
				$Total_Soft_CalEvents_Re =$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE TotalSoftCal_EvCal = %s order by id",$Total_Soft_CalEvents[$i]->id));
				$Total_Soft_CalEvents_Rec=esc_html($Total_Soft_CalEvents_Re[0]->TotalSoftCal_EvRec);
			}
			for($i=0;$i<count($Total_Soft_CalEvents_Date1);$i++){
				array_push($Total_Soft_CalEvents_Date,$Total_Soft_CalEvents_Date1[$i]);
				array_push($Total_Soft_CalEvents_Desc,$Total_Soft_CalEvents_Desc1[$i]);
			}
			for($i=0;$i<count($Total_Soft_CalEvents_Date);$i++){
				if($Total_Soft_CalEvents_Date[$i]!=''||$Total_Soft_CalEvents_Date[$i]!=NULL){
					for($j=$i;$j<count($Total_Soft_CalEvents_Date)-1;$j++){
						if($Total_Soft_CalEvents_Date[$i]===$Total_Soft_CalEvents_Date[$j+1]){
							$Total_Soft_CalEvents_Date[$j+1]='';
							$Total_Soft_CalEvents_Desc[$i]  =$Total_Soft_CalEvents_Desc[$i].$Total_Soft_CalEvents_Desc[$j+1];
							$Total_Soft_CalEvents_Desc[$j+1]='';
						}
					}
				}
			}
			for($i=0;$i<count($Total_Soft_CalEvents_Date);$i++){
				if($Total_Soft_CalEvents_Date[$i]!=''){
					array_push($Total_Soft_CalEvents_Date_Real,$Total_Soft_CalEvents_Date[$i]);
					array_push($Total_Soft_CalEvents_Desc_Real,wp_kses_post($Total_Soft_CalEvents_Desc[$i]));
				}
			} ?>
        <style type="text/css">
            /********** Normal Styles ***************/
            .TimleLIne_TS_Cal, .TimleLIne_TS_Cal * {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                line-height: 1.3 !important;
                letter-spacing: 0 !important;
            }

            .TimleLIne_TS_Cal a {
                text-decoration: none;
                border-bottom: 0px !important;
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            .TimleLIne_TS_Cal a:focus {
                outline: none !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                max-width: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_01);?>px;
                width: 100%;
                margin: 10px auto;
                position: relative;
                border: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_05);?>px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_04);?> <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_06);?>;
                z-index: 0;
            }

            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type1') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 10px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type2') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type3') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                transform: rotate(-3deg);
                -moz-transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type4') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 15px;
                right: 10px;
                left: auto;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 15px 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                transform: rotate(3deg);
                -moz-transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type5') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                z-index: -1;
                position: absolute;
                content: "";
                bottom: 25px;
                left: 10px;
                width: 50%;
                top: 80%;
                max-width: 300px;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 35px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                transform: rotate(-8deg);
                -moz-transform: rotate(-8deg);
                -webkit-transform: rotate(-8deg);
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                transform: rotate(8deg);
                -moz-transform: rotate(8deg);
                -webkit-transform: rotate(8deg);
                right: 10px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type6') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                top: 50%;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type7') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                top: 0;
                bottom: 0;
                left: 10px;
                right: 10px;
                border-radius: 100px / 10px;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type8') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                position: relative;
                box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -webkit-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
                -moz-box-shadow: 0 1px 4px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>, 0 0 40px <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?> inset;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                content: "";
                position: absolute;
                z-index: -1;
                box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 0 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                top: 10px;
                bottom: 10px;
                left: 0;
                right: 0;
                border-radius: 100px / 10px;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                right: 10px;
                left: auto;
                transform: skew(8deg) rotate(3deg);
                -moz-transform: skew(8deg) rotate(3deg);
                -webkit-transform: skew(8deg) rotate(3deg);
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type9') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:before, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                position: absolute;
                content: "";
                box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 10px 25px 20px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                top: 40px;
                left: 50px;
                bottom: 50px;
                width: 15%;
                z-index: -1;
                -webkit-transform: rotate(-8deg);
                -moz-transform: rotate(-8deg);
                transform: rotate(-8deg);
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                -webkit-transform: rotate(8deg);
                -moz-transform: rotate(8deg);
                transform: rotate(8deg);
                right: 50px;
                left: auto;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type10') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 0 10px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type11') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 4px -4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type12') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 5px 5px 3px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type13') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 2px 2px white, 4px 4px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type14') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 8px 8px 18px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type15') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 8px 6px -6px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'type16') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -moz-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
                -webkit-box-shadow: 0 0 18px 7px<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_03);?>;
            }

            <?php } else if($TotalSoftCal_Par[0]->TotalSoftCal4_02 == 'none') { ?>
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                box-shadow: none !important;
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
            }

            <?php } ?>
            /********** Style for the month year bar ***************/
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar {
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'transparent'){ ?> background: transparent !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'color'){ ?> background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient1'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>;
                background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient2'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>;
                background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -o-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -moz-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient3'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>;
                background: -webkit-linear-gradient(left top, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -o-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: -moz-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
                background: linear-gradient(to bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient4'){ ?> background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient5'){ ?> background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -o-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -moz-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient6'){ ?> background: -webkit-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 20%);
                background: -o-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 20%);
                background: -moz-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 20%);
                background: repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 20%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient7'){ ?> background: -webkit-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -o-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -moz-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient8'){ ?> background: -webkit-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -o-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -moz-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient9'){ ?> background: -webkit-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -o-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: -moz-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
                background: repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient10'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient11'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 60%);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 60%);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 60%);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 60%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient12'){ ?> background: -webkit-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -o-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: -moz-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
                background: radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_07 == 'gradient13'){ ?> background: -webkit-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 15%);
                background: -o-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 15%);
                background: -moz-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 15%);
                background: repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_09);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_08);?> 15%);
            <?php }?> display: block;
                float: left;
                width: 100%;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_10);?>px;
                font-weight: 300;
                padding: 5px;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                cursor: default;
                position: relative;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .prev, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .next {
                padding: 0 12px;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_15);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_16);?>;
                cursor: pointer;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .prev:hover, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .next:hover {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_17);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .year {
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_12 == 'format1'){ ?> float: left;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_12 == 'format2'){ ?> float: right;
            <?php }?>
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .yearmonth {
                text-align: center;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .year span {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_13);?>;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_11);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .month-year-bar .month {
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_12 == 'format1'){ ?> float: right;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_12 == 'format2'){ ?> float: left;
            <?php }?> padding: 0 12px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_18);?>;
                font-family: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_11);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_LAH {
                width: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_20);?>%;
                height: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_21);?>px;
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_19);?>;
                margin: 0 auto;
                position: absolute;
                bottom: 0;
                left: <?php echo intval(50-esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_20)/2);?>%;
                z-index: 10;
            }

            /********** Style for the bar containing dates ***************/
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar {
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'transparent'){ ?> background: transparent !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'color'){ ?> background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient1'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient2'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient3'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(left top, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(to bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient4'){ ?> background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient5'){ ?> background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient6'){ ?> background: -webkit-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: -o-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: -moz-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient7'){ ?> background: -webkit-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient8'){ ?> background: -webkit-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient9'){ ?> background: -webkit-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient10'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient11'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient12'){ ?> background: -webkit-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient13'){ ?> background: -webkit-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: -o-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: -moz-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
            <?php }?> display: block;
                width: 100%;
                padding: 0 50px;
                position: relative;
                font-size: 0;
                white-space: nowrap;
                overflow: hidden;
                text-align: left;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a {
                display: block;
                height: 70px;
                width: 100px;
                text-align: center;
                display: inline-block;
                border-right: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_25);?>;
                cursor: pointer !important;
                transition: color .2s, transform .2s;
                -webkit-transition: color .2s, transform .2s;
                -moz-transition: color .2s, transform .2s;
                z-index: 0;
                perspective: 800px;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a:last-child {
                border-right: none !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a:hover {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_27);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a span {
                transition: color .2s, transform .2s;
                -webkit-transition: color .2s, -webkit-transform .2s;
                -moz-transition: color .2s, -moz-transform .2s;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.noevent {
                display: none;
                width: 100%;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_26);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_27);?>;
                line-height: 70px !important;
                border-right: none !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.selected > span.date {
                transform: scale(1.1, 1.1);
                -moz-transform: scale(1.1, 1.1);
                -webkit-transform: scale(1.1, 1.1);
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_30);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.selected > span.month {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_31);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.prev, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.next {
                position: absolute;
                top: 0;
                width: 50px;
                min-width: 0;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_33);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_34);?>;
                line-height: 70px !important;
                z-index: 2;
                display: inline-block;
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'transparent'){ ?> background: transparent !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'color'){ ?> background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient1'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient2'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient3'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-linear-gradient(left top, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -o-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: -moz-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
                background: linear-gradient(to bottom right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient4'){ ?> background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient5'){ ?> background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient6'){ ?> background: -webkit-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: -o-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: -moz-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
                background: repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 20%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient7'){ ?> background: -webkit-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient8'){ ?> background: -webkit-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient9'){ ?> background: -webkit-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -o-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: -moz-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
                background: repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 7%,<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient10'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient11'){ ?> background: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 5%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 15%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 60%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient12'){ ?> background: -webkit-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -o-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: -moz-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
                background: radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_22 == 'gradient13'){ ?> background: -webkit-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: -o-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: -moz-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
                background: repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?>, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_24);?> 10%, <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_23);?> 15%);
            <?php }?>
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.prev:hover, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.next:hover {
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_35);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar .month span {
                display: inline-block;
                min-width: 60px;
                text-align: center;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.prev {
                left: 0;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a.next {
                right: 0;
                border-left: 1px solid<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_25);?>;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a span.date {
                display: block;
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_26);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_27);?>;
                line-height: 40px !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a span.month {
                font-size: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_28);?>px;
                color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_29);?>
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_LAB {
                width: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_37);?>%;
                height: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_38);?>px;
                background-color: <?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_36);?>;
                margin: 0 auto;
                position: absolute;
                bottom: 0;
                left: <?php echo intval(50-esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_37)/2);?>%;
                z-index: 10;
            }

            /********** Whole style for TimleLIne_TS_Cal_wrap ***************/
            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap {
                width: 100%;
            <?php if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'transparent'){ ?> background: transparent !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'color'){ ?> background-color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> !important;
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient1'){ ?> background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
                background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient2'){ ?> background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
                background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -o-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -moz-linear-gradient(right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient3'){ ?> background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
                background: -webkit-linear-gradient(left top, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -o-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: -moz-linear-gradient(bottom right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
                background: linear-gradient(to bottom right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient4'){ ?> background: -webkit-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -o-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -moz-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient5'){ ?> background: -webkit-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -o-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -moz-linear-gradient(left, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: linear-gradient(to right, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient6'){ ?> background: -moz-repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 20%);
                background: repeating-linear-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 20%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient7'){ ?> background: -webkit-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -o-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -moz-repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: repeating-linear-gradient(45deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient8'){ ?> background: -webkit-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -o-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -moz-repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: repeating-linear-gradient(190deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient9'){ ?> background: -webkit-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -o-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: -moz-repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
                background: repeating-linear-gradient(90deg,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 7%,<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 10%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient10'){ ?> background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient11'){ ?> background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>;
                background: -webkit-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 5%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 15%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 60%);
                background: -o-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 5%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 15%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 60%);
                background: -moz-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 5%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 15%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 60%);
                background: radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 5%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 15%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 60%);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient12'){ ?> background: -webkit-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -o-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: -moz-radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
                background: radial-gradient(circle, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>);
            <?php }else if($TotalSoftCal_Par[0]->TotalSoftCal4_39 == 'gradient13'){ ?> background: -webkit-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 15%);
                background: -o-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 15%);
                background: -moz-repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 15%);
                background: repeating-radial-gradient(<?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?>, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_02);?> 10%, <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_01);?> 15%);
            <?php }?>
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event {
                overflow: auto;
                display: none;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event.selected {
                display: block;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event .date span {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_24);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_25);?>px;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_26);?>;
                margin-left: -6px;
                padding: 2px 5px;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event .date {
                display: block;
                margin: 0 15px;
                text-align: left;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event .date i {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_29);?>;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_28);?>px;
                height: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_28)*2;?>px;
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_28)*2;?>px;
                line-height: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_28)*2;?>px !important;
                text-align: center;
                border-radius: 50%;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event > .layout1 {
                padding: 15px;
                width: 100%;
                display: block;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event p {
                margin: 10px 0 !important;
                line-height: 1.3 !important;
                font-weight: 400 !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event h3 {
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_05);?>px !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_06);?> !important;
                background-color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_07);?> !important;
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_08);?> !important;
                text-align: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_09);?> !important;
                text-transform: none !important;
                font-weight: 400 !important;
                padding: 0 12px !important;
                line-height: 2 !important;
                margin: 10px 0 !important;
                width: 100% !important;
                height: auto !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TimleLIne_TS_Cal_wrap .TimleLIne_TS_Cal_event h3:after {
                display: none !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Link_<?php echo esc_html($Total_Soft_Cal); ?> {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_12);?> !important;
                font-size: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_16);?>px !important;
                font-family: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_17);?> !important;
                border: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_19);?>px solid <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_18);?> !important;
                border-radius: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_20);?>px !important;
                padding: 5px 10px !important;
                box-shadow: none !important;
                margin: 0 auto !important;
                display: block !important;
                width: max-content !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_LinkMar_<?php echo esc_html($Total_Soft_Cal); ?> {
                margin: 0px 10px;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Link_<?php echo esc_html($Total_Soft_Cal); ?>:hover {
                color: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_13);?> !important;
                text-decoration: none;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Media_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_10);?>%;
                height: auto;
                display: inline !important;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Mediadiv_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_10);?>%;
                position: relative;
                display: inline-block;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Mediadiv_<?php echo esc_html($Total_Soft_Cal); ?>:after {
                padding-top: 56.25% !important;
                /* 16:9 ratio */
                display: block;
                content: '';
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Mediaiframe_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: 100% !important;
                height: 100% !important;
                left: 0;
                position: absolute;
            }

            .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_LAE_<?php echo esc_html($Total_Soft_Cal); ?> {
                width: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_22);?>%;
                height: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_23);?>px;
                background: <?php echo esc_html($TotalSoftCal_Part[0]->TotalSoftCal_21);?>;
                position: relative;
                margin: 10px auto !important;
                z-index: 10;
            }

            /********** Make it responsive ***************/
            @media screen and (max-width: 600px) {
                .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                    width: 100%;
                }

                .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .dates-bar a, .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> {
                    cursor: default !important;
                }

                .TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?> .TotalSoftcalEvent_Mediadiv_<?php echo esc_html($Total_Soft_Cal); ?> {
                    width: 100%;
                }
            }
        </style>
        <?php 
            wp_register_script("ts_calendar_scripts_js_timeline_res", plugins_url('../JS/res-timeline.js',__FILE__), ['jquery']);
            wp_enqueue_script("ts_calendar_scripts_js_timeline_res");
        ?>
        <div class="TimleLIne_TS_Cal TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>">
            <input type="text" style="display: none;" id="TimleLIne_TS_Cal_HDF_<?php echo esc_html($Total_Soft_Cal); ?>"
                   value="<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_12); ?>">
            <input type="text" style="display: none;" id="TimleLIne_TS_Cal_YAT_<?php echo esc_html($Total_Soft_Cal); ?>"
                   value="<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_14); ?>">
            <input type="text" style="display: none;" id="TimleLIne_TS_Cal_BAT_<?php echo esc_html($Total_Soft_Cal); ?>"
                   value="<?php echo esc_html($TotalSoftCal_Par[0]->TotalSoftCal4_32); ?>">
            <div class="TimleLIne_TS_Cal_wrap">
							<?php for($i=0;$i<count($Total_Soft_CalEvents_Date_Real);$i++){ ?>
                  <div class="TimleLIne_TS_Cal_event" data-date="<?php echo esc_html($Total_Soft_CalEvents_Date_Real[$i]); ?>">
										<?php echo wp_kses_post($Total_Soft_CalEvents_Desc_Real[$i]); ?>
                  </div>
							<?php } ?>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                setTimeout(function () {
                    jQuery('.TimleLIne_TS_Cal_<?php echo esc_html($Total_Soft_Cal); ?>').jflatTimeline({
                        scroll: '1',
                        calid: '<?php echo esc_html($Total_Soft_Cal); ?>',
                        month: new Array('<?php esc_html_e('January','Total-Soft-Calendar');?>', '<?php esc_html_e('February','Total-Soft-Calendar');?>', '<?php esc_html_e('March','Total-Soft-Calendar');?>', '<?php esc_html_e('April','Total-Soft-Calendar');?>', '<?php esc_html_e('May','Total-Soft-Calendar');?>', '<?php esc_html_e('June','Total-Soft-Calendar');?>', '<?php esc_html_e('July','Total-Soft-Calendar');?>', '<?php esc_html_e('August','Total-Soft-Calendar');?>', '<?php esc_html_e('September','Total-Soft-Calendar');?>', '<?php esc_html_e('October','Total-Soft-Calendar');?>', '<?php esc_html_e('November','Total-Soft-Calendar');?>', '<?php esc_html_e('December','Total-Soft-Calendar');?>')
                    });
                }, 300)
            })
        </script>
		<?php }
		echo $after_widget;
	}
}
?>