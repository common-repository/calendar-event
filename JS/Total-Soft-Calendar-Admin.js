jQuery(document).on("ready", function() {
    setTimeout(() => {
        jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
    }, 100);
});

function TotalSoft_Cal_Out() {
    jQuery('.TotalSoft_Cal_Range').each(function() {
        if (jQuery(this).hasClass('TotalSoft_Cal_Rangeper')) {
            jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + '%');
        } else if (jQuery(this).hasClass('TotalSoft_Cal_Rangepx')) {
            jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 'px');
        } else if (jQuery(this).hasClass('TotalSoft_Cal_RangeSec')) {
            jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val() + 's');
        } else {
            jQuery('#' + jQuery(this).attr('id') + '_Output').html(jQuery(this).val());
        }
    })
}

function Copy_Shortcode_Cal(IDSHORT) {
    var aux = document.createElement("input");
    var code = document.getElementById(IDSHORT).innerHTML;
    code = code.replace("&lt;", "<");
    code = code.replace("&gt;", ">");
    code = code.replace("&#039;", "'");
    code = code.replace("&#039;", "'");
    aux.setAttribute("value", code);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
}

function TS_Cal_TM_But(type, col_id) {
    jQuery('.TS_Cal_Option_Div').css('display', 'none');
    jQuery('.Total_Soft_Cal_AMSetDiv_Button').removeClass('Total_Soft_Cal_AMSetDiv_Button_C');
    jQuery('#TS_Cal_TM_TBut_' + type + '_' + col_id).addClass('Total_Soft_Cal_AMSetDiv_Button_C');
    jQuery('#Total_Soft_Cal_AMSetTable_' + type + '_' + col_id).css('display', 'block');
}

function Total_Soft_Cal_AMD2_But1(Short_ID) {
    alert('This is Our Free Version. For more adventures Click to buy Personal version.');
}

function TotalSoftCal_Edit(Total_Soft_Cal_ID) {
    var ts_calendar_fonts_arr = new Array(
        "TotalSoftCal_HFF", "TotalSoftCal_WFF", "TotalSoftCal_DFF", "TotalSoftCal1_Ev_T_FF", "TotalSoftCal2_MFF", "TotalSoftCal2_WFF", "TotalSoftCal2_Ev_HFF", "TotalSoftCal2_Ev_TFF", "TotalSoftCal3_H_FF", "TotalSoftCal3_WD_FF", "TotalSoftCal3_Ev_FF", "TotalSoftCal3_Ev_T_FF", "TotalSoftCal3_Ev_L_FF", "TotalSoftCal4_11", "TotalSoftCal_4_06", "TotalSoftCal_4_17", "TotalSoftCal_4_26"
    );
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,
            action: 'TotalSoftCal_Edit',
            foobar: Total_Soft_Cal_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success !== true) {
                console.error(response.data);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
                return false;
            }
            var data = response.data;
            jQuery('#TotalSoftCal_Name').val(data['TotalSoftCal_Name']);
            jQuery('#TotalSoftCal_Type').val(data['TotalSoftCal_Type']);
            jQuery('#TotalSoftCal_Type').hide();
            setTimeout(function() {
                jQuery('#Total_SoftCal_Update').val(Total_Soft_Cal_ID);
                if (data['TotalSoftCal_Type'] == 'Event Calendar') {
                    jQuery('#TotalSoftCal_DFF').val(data['TotalSoftCal_DFF']);
                    jQuery('#TotalSoftCal_BackIconType').val(data['TotalSoftCal_BackIconType']);
                    jQuery('#TotalSoftCal_BgCol').val(data['TotalSoftCal_BgCol']);
                    jQuery('#TotalSoftCal_GrCol').val(data['TotalSoftCal_GrCol']);
                    jQuery('#TotalSoftCal_GW').val(data['TotalSoftCal_GW']);
                    jQuery('#TotalSoftCal_BW').val(data['TotalSoftCal_BW']);
                    jQuery('#TotalSoftCal_BStyle').val(data['TotalSoftCal_BStyle']);
                    jQuery('#TotalSoftCal_BCol').val(data['TotalSoftCal_BCol']);
                    jQuery('#TotalSoftCal_BSCol').val(data['TotalSoftCal_BSCol']);
                    jQuery('#TotalSoftCal_MW').val(data['TotalSoftCal_MW']);
                    jQuery('#TotalSoftCal_HBgCol').val(data['TotalSoftCal_HBgCol']);
                    jQuery('#TotalSoftCal_HCol').val(data['TotalSoftCal_HCol']);
                    jQuery('#TotalSoftCal_HFS').val(data['TotalSoftCal_HFS']);
                    jQuery('#TotalSoftCal_HFF').val(data['TotalSoftCal_HFF']);
                    jQuery('#TotalSoftCal_WBgCol').val(data['TotalSoftCal_WBgCol']);
                    jQuery('#TotalSoftCal_WCol').val(data['TotalSoftCal_WCol']);
                    jQuery('#TotalSoftCal_WFS').val(data['TotalSoftCal_WFS']);
                    jQuery('#TotalSoftCal_WFF').val(data['TotalSoftCal_WFF']);
                    jQuery('#TotalSoftCal_LAW').val(data['TotalSoftCal_LAW']);
                    jQuery('#TotalSoftCal_LAWS').val(data['TotalSoftCal_LAWS']);
                    jQuery('#TotalSoftCal_LAWC').val(data['TotalSoftCal_LAWC']);
                    jQuery('#TotalSoftCal_DBgCol').val(data['TotalSoftCal_DBgCol']);
                    jQuery('#TotalSoftCal_DCol').val(data['TotalSoftCal_DCol']);
                    jQuery('#TotalSoftCal_DFS').val(data['TotalSoftCal_DFS']);
                    jQuery('#TotalSoftCal_TBgCol').val(data['TotalSoftCal_TBgCol']);
                    jQuery('#TotalSoftCal_TCol').val(data['TotalSoftCal_TCol']);
                    jQuery('#TotalSoftCal_TFS').val(data['TotalSoftCal_TFS']);
                    jQuery('#TotalSoftCal_TNBgCol').val(data['TotalSoftCal_TNBgCol']);
                    jQuery('#TotalSoftCal_HovBgCol').val(data['TotalSoftCal_HovBgCol']);
                    jQuery('#TotalSoftCal_HovCol').val(data['TotalSoftCal_HovCol']);
                    jQuery('#TotalSoftCal_NumPos').val(data['TotalSoftCal_NumPos']);
                    jQuery('#TotalSoftCal_WDStart').val(data['TotalSoftCal_WDStart']);
                    jQuery('#TotalSoftCal_RefIcCol').val(data['TotalSoftCal_RefIcCol']);
                    jQuery('#TotalSoftCal_RefIcSize').val(data['TotalSoftCal_RefIcSize']);
                    jQuery('#TotalSoftCal_ArrowType').val(data['TotalSoftCal_ArrowType']);
                    jQuery('#TotalSoftCal_ArrowCol').val(data['TotalSoftCal_ArrowCol']);
                    jQuery('#TotalSoftCal_ArrowSize').val(data['TotalSoftCal_ArrowSize']);
                } else if (data['TotalSoftCal_Type'] == 'Simple Calendar') {
                    jQuery('#TotalSoftCal2_WDStart').val(data['TotalSoftCal2_WDStart'])
                    jQuery('#TotalSoftCal2_BW').val(data['TotalSoftCal2_BW'])
                    jQuery('#TotalSoftCal2_BS').val(data['TotalSoftCal2_BS'])
                    jQuery('#TotalSoftCal2_BC').val(data['TotalSoftCal2_BC'])
                    jQuery('#TotalSoftCal2_W').val(data['TotalSoftCal2_W'])
                    jQuery('#TotalSoftCal2_H').val(data['TotalSoftCal2_H'])
                    jQuery('#TotalSoftCal2_BxShShow').val(data['TotalSoftCal2_BxShShow'])
                    jQuery('#TotalSoftCal2_BxShType').val(data['TotalSoftCal2_BxShType'])
                    jQuery('#TotalSoftCal2_BxShC').val(data['TotalSoftCal2_BxShC'])
                    jQuery('#TotalSoftCal2_MBgC').val(data['TotalSoftCal2_MBgC'])
                    jQuery('#TotalSoftCal2_MC').val(data['TotalSoftCal2_MC'])
                    jQuery('#TotalSoftCal2_MFS').val(data['TotalSoftCal2_MFS'])
                    jQuery('#TotalSoftCal2_MFF').val(data['TotalSoftCal2_MFF'])
                    jQuery('#TotalSoftCal2_WBgC').val(data['TotalSoftCal2_WBgC'])
                    jQuery('#TotalSoftCal2_WC').val(data['TotalSoftCal2_WC'])
                    jQuery('#TotalSoftCal2_WFS').val(data['TotalSoftCal2_WFS'])
                    jQuery('#TotalSoftCal2_WFF').val(data['TotalSoftCal2_WFF'])
                    jQuery('#TotalSoftCal2_LAW_W').val(data['TotalSoftCal2_LAW_W'])
                    jQuery('#TotalSoftCal2_LAW_S').val(data['TotalSoftCal2_LAW_S'])
                    jQuery('#TotalSoftCal2_LAW_C').val(data['TotalSoftCal2_LAW_C'])
                    jQuery('#TotalSoftCal2_DBgC').val(data['TotalSoftCal2_DBgC'])
                    jQuery('#TotalSoftCal2_DC').val(data['TotalSoftCal2_DC'])
                    jQuery('#TotalSoftCal2_DFS').val(data['TotalSoftCal2_DFS'])
                    jQuery('#TotalSoftCal2_TdBgC').val(data['TotalSoftCal2_TdBgC'])
                    jQuery('#TotalSoftCal2_TdC').val(data['TotalSoftCal2_TdC'])
                    jQuery('#TotalSoftCal2_TdFS').val(data['TotalSoftCal2_TdFS'])
                    jQuery('#TotalSoftCal2_EdBgC').val(data['TotalSoftCal2_EdBgC'])
                    jQuery('#TotalSoftCal2_EdC').val(data['TotalSoftCal2_EdC'])
                    jQuery('#TotalSoftCal2_EdFS').val(data['TotalSoftCal2_EdFS'])
                    jQuery('#TotalSoftCal2_HBgC').val(data['TotalSoftCal2_HBgC'])
                    jQuery('#TotalSoftCal2_HC').val(data['TotalSoftCal2_HC'])
                    jQuery('#TotalSoftCal2_ArrType').val(data['TotalSoftCal2_ArrType'])
                    jQuery('#TotalSoftCal2_ArrFS').val(data['TotalSoftCal2_ArrFS'])
                    jQuery('#TotalSoftCal2_ArrC').val(data['TotalSoftCal2_ArrC'])
                    jQuery('#TotalSoftCal2_OmBgC').val(data['TotalSoftCal2_OmBgC'])
                    jQuery('#TotalSoftCal2_OmC').val(data['TotalSoftCal2_OmC'])
                    jQuery('#TotalSoftCal2_OmFS').val(data['TotalSoftCal2_OmFS'])
                    jQuery('#TotalSoftCal2_Ev_HBgC').val(data['TotalSoftCal2_Ev_HBgC'])
                    jQuery('#TotalSoftCal2_Ev_HC').val(data['TotalSoftCal2_Ev_HC'])
                    jQuery('#TotalSoftCal2_Ev_HFS').val(data['TotalSoftCal2_Ev_HFS'])
                    jQuery('#TotalSoftCal2_Ev_HFF').val(data['TotalSoftCal2_Ev_HFF'])
                    jQuery('#TotalSoftCal2_Ev_HText').val(data['TotalSoftCal2_Ev_HText'])
                    jQuery('#TotalSoftCal2_Ev_BBgC').val(data['TotalSoftCal2_Ev_BBgC'])
                    jQuery('#TotalSoftCal2_Ev_TC').val(data['TotalSoftCal2_Ev_TC'])
                    jQuery('#TotalSoftCal2_Ev_TFF').val(data['TotalSoftCal2_Ev_TFF'])
                    jQuery('#TotalSoftCal2_Ev_TFS').val(data['TotalSoftCal2_Ev_TFS'])
                } else if (data['TotalSoftCal_Type'] == 'Flexible Calendar') {
                    jQuery('#TotalSoftCal3_MW').val(data['TotalSoftCal3_MW']);
                    jQuery('#TotalSoftCal3_WDStart').val(data['TotalSoftCal3_WDStart']);
                    jQuery('#TotalSoftCal3_BgC').val(data['TotalSoftCal3_BgC']);
                    jQuery('#TotalSoftCal3_GrC').val(data['TotalSoftCal3_GrC']);
                    jQuery('#TotalSoftCal3_BBC').val(data['TotalSoftCal3_BBC']);
                    jQuery('#TotalSoftCal3_BoxShShow').val(data['TotalSoftCal3_BoxShShow']);
                    jQuery('#TotalSoftCal3_BoxShType').val(data['TotalSoftCal3_BoxShType']);
                    jQuery('#TotalSoftCal3_BoxShC').val(data['TotalSoftCal3_BoxShC']);
                    jQuery('#TotalSoftCal3_H_BgC').val(data['TotalSoftCal3_H_BgC']);
                    jQuery('#TotalSoftCal3_H_BTW').val(data['TotalSoftCal3_H_BTW']);
                    jQuery('#TotalSoftCal3_H_BTC').val(data['TotalSoftCal3_H_BTC']);
                    jQuery('#TotalSoftCal3_H_FF').val(data['TotalSoftCal3_H_FF']);
                    jQuery('#TotalSoftCal3_H_MFS').val(data['TotalSoftCal3_H_MFS']);
                    jQuery('#TotalSoftCal3_H_MC').val(data['TotalSoftCal3_H_MC']);
                    jQuery('#TotalSoftCal3_H_YFS').val(data['TotalSoftCal3_H_YFS']);
                    jQuery('#TotalSoftCal3_H_YC').val(data['TotalSoftCal3_H_YC']);
                    jQuery('#TotalSoftCal3_H_Format').val(data['TotalSoftCal3_H_Format']);
                    jQuery('#TotalSoftCal3_Arr_Type').val(data['TotalSoftCal3_Arr_Type']);
                    jQuery('#TotalSoftCal3_Arr_C').val(data['TotalSoftCal3_Arr_C']);
                    jQuery('#TotalSoftCal3_Arr_S').val(data['TotalSoftCal3_Arr_S']);
                    jQuery('#TotalSoftCal3_Arr_HC').val(data['TotalSoftCal3_Arr_HC']);
                    jQuery('#TotalSoftCal3_LAH_W').val(data['TotalSoftCal3_LAH_W']);
                    jQuery('#TotalSoftCal3_LAH_C').val(data['TotalSoftCal3_LAH_C']);
                    jQuery('#TotalSoftCal3_WD_BgC').val(data['TotalSoftCal3_WD_BgC']);
                    jQuery('#TotalSoftCal3_WD_C').val(data['TotalSoftCal3_WD_C']);
                    jQuery('#TotalSoftCal3_WD_FS').val(data['TotalSoftCal3_WD_FS']);
                    jQuery('#TotalSoftCal3_WD_FF').val(data['TotalSoftCal3_WD_FF']);
                    jQuery('#TotalSoftCal3_D_BgC').val(data['TotalSoftCal3_D_BgC']);
                    jQuery('#TotalSoftCal3_D_C').val(data['TotalSoftCal3_D_C']);
                    jQuery('#TotalSoftCal3_TD_BgC').val(data['TotalSoftCal3_TD_BgC']);
                    jQuery('#TotalSoftCal3_TD_C').val(data['TotalSoftCal3_TD_C']);
                    jQuery('#TotalSoftCal3_HD_BgC').val(data['TotalSoftCal3_HD_BgC']);
                    jQuery('#TotalSoftCal3_HD_C').val(data['TotalSoftCal3_HD_C']);
                    jQuery('#TotalSoftCal3_ED_C').val(data['TotalSoftCal3_ED_C']);
                    jQuery('#TotalSoftCal3_ED_HC').val(data['TotalSoftCal3_ED_HC']);
                    jQuery('#TotalSoftCal3_Ev_Format').val(data['TotalSoftCal3_Ev_Format']);
                    jQuery('#TotalSoftCal3_Ev_BTW').val(data['TotalSoftCal3_Ev_BTW']);
                    jQuery('#TotalSoftCal3_Ev_BTC').val(data['TotalSoftCal3_Ev_BTC']);
                    jQuery('#TotalSoftCal3_Ev_BgC').val(data['TotalSoftCal3_Ev_BgC']);
                    jQuery('#TotalSoftCal3_Ev_C').val(data['TotalSoftCal3_Ev_C']);
                    jQuery('#TotalSoftCal3_Ev_FS').val(data['TotalSoftCal3_Ev_FS']);
                    jQuery('#TotalSoftCal3_Ev_FF').val(data['TotalSoftCal3_Ev_FF']);
                } else if (data['TotalSoftCal_Type'] == 'TimeLine Calendar') {
                    jQuery('#TotalSoftCal4_01').val(data['TotalSoftCal4_01']);
                    jQuery('#TotalSoftCal4_02').val(data['TotalSoftCal4_02']);
                    jQuery('#TotalSoftCal4_03').val(data['TotalSoftCal4_03']);
                    jQuery('#TotalSoftCal4_04').val(data['TotalSoftCal4_04']);
                    jQuery('#TotalSoftCal4_05').val(data['TotalSoftCal4_05']);
                    jQuery('#TotalSoftCal4_06').val(data['TotalSoftCal4_06']);
                    jQuery('#TotalSoftCal4_07').val(data['TotalSoftCal4_07']);
                    jQuery('#TotalSoftCal4_08').val(data['TotalSoftCal4_08']);
                    jQuery('#TotalSoftCal4_09').val(data['TotalSoftCal4_09']);
                    jQuery('#TotalSoftCal4_10').val(data['TotalSoftCal4_10']);
                    jQuery('#TotalSoftCal4_11').val(data['TotalSoftCal4_11']);
                    jQuery('#TotalSoftCal4_12').val(data['TotalSoftCal4_12']);
                    jQuery('#TotalSoftCal4_13').val(data['TotalSoftCal4_13']);
                    jQuery('#TotalSoftCal4_14').val(data['TotalSoftCal4_14']);
                    jQuery('#TotalSoftCal4_15').val(data['TotalSoftCal4_15']);
                    jQuery('#TotalSoftCal4_16').val(data['TotalSoftCal4_16']);
                    jQuery('#TotalSoftCal4_17').val(data['TotalSoftCal4_17']);
                    jQuery('#TotalSoftCal4_18').val(data['TotalSoftCal4_18']);
                    jQuery('#TotalSoftCal4_19').val(data['TotalSoftCal4_19']);
                    jQuery('#TotalSoftCal4_20').val(data['TotalSoftCal4_20']);
                    jQuery('#TotalSoftCal4_21').val(data['TotalSoftCal4_21']);
                    jQuery('#TotalSoftCal4_22').val(data['TotalSoftCal4_22']);
                    jQuery('#TotalSoftCal4_23').val(data['TotalSoftCal4_23']);
                    jQuery('#TotalSoftCal4_24').val(data['TotalSoftCal4_24']);
                    jQuery('#TotalSoftCal4_25').val(data['TotalSoftCal4_25']);
                    jQuery('#TotalSoftCal4_26').val(data['TotalSoftCal4_26']);
                    jQuery('#TotalSoftCal4_27').val(data['TotalSoftCal4_27']);
                    jQuery('#TotalSoftCal4_28').val(data['TotalSoftCal4_28']);
                    jQuery('#TotalSoftCal4_29').val(data['TotalSoftCal4_29']);
                    jQuery('#TotalSoftCal4_30').val(data['TotalSoftCal4_30']);
                    jQuery('#TotalSoftCal4_31').val(data['TotalSoftCal4_31']);
                    jQuery('#TotalSoftCal4_32').val(data['TotalSoftCal4_32']);
                    jQuery('#TotalSoftCal4_33').val(data['TotalSoftCal4_33']);
                    jQuery('#TotalSoftCal4_34').val(data['TotalSoftCal4_34']);
                    jQuery('#TotalSoftCal4_35').val(data['TotalSoftCal4_35']);
                    jQuery('#TotalSoftCal4_36').val(data['TotalSoftCal4_36']);
                    jQuery('#TotalSoftCal4_37').val(data['TotalSoftCal4_37']);
                    jQuery('#TotalSoftCal4_38').val(data['TotalSoftCal4_38']);
                    jQuery('#TotalSoftCal4_39').val(data['TotalSoftCal4_39']);
                }
                for (let i = 0; i < ts_calendar_fonts_arr.length; i++) {
                    if (jQuery(`#${ts_calendar_fonts_arr[i]}`).length) {
                        if (!jQuery(`#${ts_calendar_fonts_arr[i]}`).val()) {
                            jQuery(`#${ts_calendar_fonts_arr[i]}`).val("Cairo");
                        }
                    }
                }
                jQuery('.Total_Soft_Cal_Color').alphaColorPicker();
                jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
                TotalSoft_Cal_Out();
            }, 500)
        }
    });
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_Edit1',
            foobar: Total_Soft_Cal_ID,
        },
        beforeSend: function() {},
        success: function(response) {
            if (response.success !== true) {
                console.error(response.data);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
                return false;
            }
            var data = response.data;
            jQuery('.Total_Soft_Cal_AMD2').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_AMMTable').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_AMOTable').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_Cal_Update').animate({
                'opacity': 1
            }, 500);
            jQuery('#Total_Soft_Cal_ID').html('[Total_Soft_Cal id="' + Total_Soft_Cal_ID + '"]');
            jQuery('#Total_Soft_Cal_TID').html('&lt;?php echo do_shortcode(&#039;[Total_Soft_Cal id="' + Total_Soft_Cal_ID + '"]&#039;);?&gt');
            if (data['TotalSoftCal_Type'] == 'Event Calendar') {
                jQuery('#TotalSoftCal1_Ev_T_FS').val(data['TotalSoftCal_01']);
                jQuery('#TotalSoftCal1_Ev_T_FF').val(data['TotalSoftCal_02']);
                jQuery('#TotalSoftCal1_Ev_T_C').val(data['TotalSoftCal_03']);
                jQuery('#TotalSoftCal1_Ev_T_TA').val(data['TotalSoftCal_04']);
                jQuery('#TotalSoftCal1_Ev_TiF').val(data['TotalSoftCal_05']);
                jQuery('#TotalSoftCal_BSType').val(data['TotalSoftCal_06']);
                jQuery('#TotalSoftCal1_Ev_I_W').val(data['TotalSoftCal_09']);
                jQuery('#TotalSoftCal1_Ev_I_Pos').val(data['TotalSoftCal_10']);
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_1').css('display', 'block');
                }, 500)
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_1').animate({
                        'opacity': 1
                    }, 500);
                }, 600)
                TS_Cal_TM_But('1', 'GO');
            } else if (data['TotalSoftCal_Type'] == 'Simple Calendar') {
                jQuery('#TotalSoftCal2_Ev_T_TA').val(data['TotalSoftCal_01']);
                jQuery('#TotalSoftCal2_Ev_I_W').val(data['TotalSoftCal_02']);
                jQuery('#TotalSoftCal2_Ev_I_Pos').val(data['TotalSoftCal_03']);
                jQuery('#TotalSoftCal2_Ev_TiF').val(data['TotalSoftCal_04']);
                jQuery('#TotalSoftCal2_Ev_DaF').val(data['TotalSoftCal_05']);
                jQuery('#TotalSoftCal2_Ev_ShDate').val(data['TotalSoftCal_06']);
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_2').css('display', 'block');
                }, 500)
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_2').animate({
                        'opacity': 1
                    }, 500);
                }, 600)
                TS_Cal_TM_But('2', 'GO');
            } else if (data['TotalSoftCal_Type'] == 'Flexible Calendar') {
                jQuery('#TotalSoftCal3_Ev_TiF').val(data['TotalSoftCal_01']);
                jQuery('#TotalSoftCal3_Ev_C_Type').val(data['TotalSoftCal_02']);
                jQuery('#TotalSoftCal3_Ev_C_C').val(data['TotalSoftCal_03']);
                jQuery('#TotalSoftCal3_Ev_C_HC').val(data['TotalSoftCal_04']);
                jQuery('#TotalSoftCal3_Ev_C_FS').val(data['TotalSoftCal_05']);
                jQuery('#TotalSoftCal3_Ev_LAH_W').val(data['TotalSoftCal_06']);
                jQuery('#TotalSoftCal3_Ev_LAH_C').val(data['TotalSoftCal_07']);
                jQuery('#TotalSoftCal3_Ev_B_BgC').val(data['TotalSoftCal_08']);
                jQuery('#TotalSoftCal3_Ev_B_BC').val(data['TotalSoftCal_09']);
                jQuery('#TotalSoftCal3_Ev_T_FS').val(data['TotalSoftCal_10']);
                jQuery('#TotalSoftCal3_Ev_T_FF').val(data['TotalSoftCal_11']);
                jQuery('#TotalSoftCal3_Ev_T_BgC').val(data['TotalSoftCal_12']);
                jQuery('#TotalSoftCal3_Ev_T_C').val(data['TotalSoftCal_13']);
                jQuery('#TotalSoftCal3_Ev_T_TA').val(data['TotalSoftCal_14']);
                jQuery('#TotalSoftCal3_Ev_I_W').val(data['TotalSoftCal_15']);
                jQuery('#TotalSoftCal3_Ev_I_Pos').val(data['TotalSoftCal_16']);
                jQuery('#TotalSoftCal3_Ev_L_C').val(data['TotalSoftCal_17']);
                jQuery('#TotalSoftCal3_Ev_L_HC').val(data['TotalSoftCal_18']);
                jQuery('#TotalSoftCal3_Ev_L_Pos').val(data['TotalSoftCal_19']);
                jQuery('#TotalSoftCal3_Ev_L_Text').val(data['TotalSoftCal_20']);
                jQuery('#TotalSoftCal3_Ev_LAE_W').val(data['TotalSoftCal_21']);
                jQuery('#TotalSoftCal3_Ev_LAE_C').val(data['TotalSoftCal_22']);
                jQuery('#TotalSoftCal3_Ev_L_FS').val(data['TotalSoftCal_23']);
                jQuery('#TotalSoftCal3_Ev_L_FF').val(data['TotalSoftCal_24']);
                jQuery('#TotalSoftCal3_Ev_L_BW').val(data['TotalSoftCal_25']);
                jQuery('#TotalSoftCal3_Ev_L_BC').val(data['TotalSoftCal_26']);
                jQuery('#TotalSoftCal3_Ev_L_BR').val(data['TotalSoftCal_27']);
                jQuery('#TotalSoftCal3_Ev_DaF').val(data['TotalSoftCal_28']);
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_3').css('display', 'block');
                }, 500)
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_3').animate({
                        'opacity': 1
                    }, 500);
                }, 600)
                TS_Cal_TM_But('3', 'GO');
            } else if (data['TotalSoftCal_Type'] == 'TimeLine Calendar') {
                jQuery('#TotalSoftCal_4_01').val(data['TotalSoftCal_01']);
                jQuery('#TotalSoftCal_4_02').val(data['TotalSoftCal_02']);
                jQuery('#TotalSoftCal_4_03').val(data['TotalSoftCal_03']);
                jQuery('#TotalSoftCal_4_04').val(data['TotalSoftCal_04']);
                jQuery('#TotalSoftCal_4_05').val(data['TotalSoftCal_05']);
                jQuery('#TotalSoftCal_4_06').val(data['TotalSoftCal_06']);
                jQuery('#TotalSoftCal_4_07').val(data['TotalSoftCal_07']);
                jQuery('#TotalSoftCal_4_08').val(data['TotalSoftCal_08']);
                jQuery('#TotalSoftCal_4_09').val(data['TotalSoftCal_09']);
                jQuery('#TotalSoftCal_4_10').val(data['TotalSoftCal_10']);
                jQuery('#TotalSoftCal_4_11').val(data['TotalSoftCal_11']);
                jQuery('#TotalSoftCal_4_12').val(data['TotalSoftCal_12']);
                jQuery('#TotalSoftCal_4_13').val(data['TotalSoftCal_13']);
                jQuery('#TotalSoftCal_4_14').val(data['TotalSoftCal_14']);
                jQuery('#TotalSoftCal_4_15').val(data['TotalSoftCal_15']);
                jQuery('#TotalSoftCal_4_16').val(data['TotalSoftCal_16']);
                jQuery('#TotalSoftCal_4_17').val(data['TotalSoftCal_17']);
                jQuery('#TotalSoftCal_4_18').val(data['TotalSoftCal_18']);
                jQuery('#TotalSoftCal_4_19').val(data['TotalSoftCal_19']);
                jQuery('#TotalSoftCal_4_20').val(data['TotalSoftCal_20']);
                jQuery('#TotalSoftCal_4_21').val(data['TotalSoftCal_21']);
                jQuery('#TotalSoftCal_4_22').val(data['TotalSoftCal_22']);
                jQuery('#TotalSoftCal_4_23').val(data['TotalSoftCal_23']);
                jQuery('#TotalSoftCal_4_24').val(data['TotalSoftCal_24']);
                jQuery('#TotalSoftCal_4_25').val(data['TotalSoftCal_25']);
                jQuery('#TotalSoftCal_4_26').val(data['TotalSoftCal_26']);
                jQuery('#TotalSoftCal_4_27').val(data['TotalSoftCal_27']);
                jQuery('#TotalSoftCal_4_28').val(data['TotalSoftCal_28']);
                jQuery('#TotalSoftCal_4_29').val(data['TotalSoftCal_29']);
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_4').css('display', 'block');
                }, 500)
                setTimeout(function() {
                    jQuery('#Total_Soft_Cal_AMSetDiv_4').animate({
                        'opacity': 1
                    }, 500);
                }, 600)
                TS_Cal_TM_But('4', 'GO');
            }
            jQuery('.Total_Soft_Cal_Color1').alphaColorPicker();
            jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
            TotalSoft_Cal_Out();
            setTimeout(function() {
                jQuery('.Total_Soft_Cal_AMD2').css('display', 'none');
                jQuery('.Total_Soft_AMMTable').css('display', 'none');
                jQuery('.Total_Soft_AMOTable').css('display', 'none');
                jQuery('.Total_Soft_Cal_Update').css('display', 'block');
                jQuery('.Total_Soft_Cal_AMD3').css('display', 'block');
                jQuery('#Total_Soft_AMSetTable_Main').css('display', 'block');
                jQuery('.Total_Soft_AMShortTable').css('display', 'table');
            }, 500)
            setTimeout(function() {
                jQuery('.Total_Soft_Cal_AMD3').animate({
                    'opacity': 1
                }, 500);
                jQuery('#Total_Soft_AMSetTable_Main').animate({
                    'opacity': 1
                }, 500);
                jQuery('.Total_Soft_AMShortTable').animate({
                    'opacity': 1
                }, 500);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
            }, 500)
        }
    });
}

function TotalSoftCal_Del(Total_Soft_Cal_ID) {
    jQuery('#Total_Soft_AMOTable_Calendar_tr_' + Total_Soft_Cal_ID).find('.Total_Soft_Calendar_Del_Span').addClass('Total_Soft_Calendar_Del_Span1');
}

function TotalSoftCalendar_Del_No(Total_Soft_Cal_ID) {
    jQuery('#Total_Soft_AMOTable_Calendar_tr_' + Total_Soft_Cal_ID).find('.Total_Soft_Calendar_Del_Span').removeClass('Total_Soft_Calendar_Del_Span1');
}

function TotalSoftCalendar_Del_Yes(Total_Soft_Cal_ID) {
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_Del',
            foobar: Total_Soft_Cal_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success === true) {
                location.reload();
            } else {
                console.error("Error during delete proccess");
            }
        }
    });
}

function TotalSoftCal_Clone(Total_Soft_Cal_ID) {
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_Clone',
            foobar: Total_Soft_Cal_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success === true) {
                location.reload();
            } else {
                console.error("Error during clone proccess");
            }
        }
    });
}

function TotalSoft_Reload() {
    location.reload();
}

function TotalSoftCal_EditEv(Total_Soft_CalEv_ID) {
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_EditEv',
            foobar: Total_Soft_CalEv_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success !== true) {
                console.error(response.data);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
                return false;
            }
            jQuery('.Total_Soft_Cal_AMD2').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_AMMTable1').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_AMOTable1').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_Cal_Save_Ev').animate({
                'opacity': 0
            }, 500);
            jQuery('.Total_Soft_Cal_Update_Ev').animate({
                'opacity': 1
            }, 500);
            jQuery('#Total_SoftCal_EvUpdate').val(Total_Soft_CalEv_ID);

            var data = response.data;

            jQuery('#TotalSoftCal_EvName').val(data['TotalSoftCal_EvName']);
            jQuery('#TotalSoftCal_EvCal').val(data['TotalSoftCal_EvCal']);
            jQuery('#TotalSoftCal_EvStartDate').val(data['TotalSoftCal_EvStartDate']);
            jQuery('#TotalSoftCal_EvEndDate').val(data['TotalSoftCal_EvEndDate']);
            jQuery('#TotalSoftCal_EvURL').val(data['TotalSoftCal_EvURL']);
            jQuery('#TotalSoftCal_EvURLNewTab').val(data['TotalSoftCal_EvURLNewTab']);
            jQuery('#TotalSoftCal_EvStartTime').val(data['TotalSoftCal_EvStartTime']);
            jQuery('#TotalSoftCal_EvEndTime').val(data['TotalSoftCal_EvEndTime']);
            jQuery('#TotalSoftCal_EvColor').val(data['TotalSoftCal_EvColor']);

            setTimeout(function() {
                jQuery('.Total_Soft_Cal_Color').alphaColorPicker();
                jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
            }, 500)
        }
    });
    Total_Soft_Cal_Editor();
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_EditEv_Desc',
            foobar: Total_Soft_CalEv_ID,
        },
        beforeSend: function() {},
        success: function(response) {
            if (response.success !== true) {
                console.error(response.data);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
                return false;
            }
            var data = response.data;
            jQuery('#TotalSoftCal_EvDesc_1').val(data['TotalSoftCal_EvDesc']);
            setTimeout(function() {
                tinyMCE.get('TotalSoftCal_EvDesc').setContent(data['TotalSoftCal_EvDesc']);
            }, 1000);

            jQuery('#TotalSoftCalendar_URL_Image_2').val(data['TotalSoftCal_EvImg']);
            jQuery('#TotalSoftCalendar_URL_Video_2').val(data['TotalSoftCal_EvVid_Src']);
            jQuery('#TotalSoftCalendar_URL_Video_1').val(data['TotalSoftCal_EvVid_Iframe']);
        }
    });

    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_EditEv_Rec',
            foobar: Total_Soft_CalEv_ID,
        },
        beforeSend: function() {},
        success: function(response) {
            if (response.success !== true) {
                console.error(response.data);
                jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
                return false;
            }
            var data = response.data;
            jQuery('#TotalSoftCal_EvRec').val(data['TotalSoftCal_EvRec']);
            setTimeout(function() {
                jQuery('.Total_Soft_Cal_AMD2').css('display', 'none');
                jQuery('.Total_Soft_AMMTable1').css('display', 'none');
                jQuery('.Total_Soft_AMOTable1').css('display', 'none');
                jQuery('.Total_Soft_Cal_Save_Ev').css('display', 'none');
                jQuery('.Total_Soft_Cal_Update_Ev').css('display', 'block');
                jQuery('.Total_Soft_Cal_AMD3').css('display', 'block');
                jQuery('.Total_Soft_AMEvTable').css('display', 'table');
                Total_Soft_Cal_Editor();
            }, 500)
            setTimeout(function() {
                jQuery('.Total_Soft_Cal_AMD3').animate({
                    'opacity': 1
                }, 500);
                jQuery('.Total_Soft_AMEvTable').animate({
                    'opacity': 1
                }, 500);
            }, 500)
            jQuery('.Total_Soft_Cal_Loading').css('display', 'none');
        }
    });
}

function TotalSoftCal_DelEv(Total_Soft_CalEv_ID) {
    jQuery('#Total_Soft_AMOTable1_Calendar_tr_' + Total_Soft_CalEv_ID).find('.Total_Soft_Calendar_Del_Span').addClass('Total_Soft_Calendar_Del_Span1');
}

function TotalSoftCal_DelEv_No(Total_Soft_CalEv_ID) {
    jQuery('#Total_Soft_AMOTable1_Calendar_tr_' + Total_Soft_CalEv_ID).find('.Total_Soft_Calendar_Del_Span').removeClass('Total_Soft_Calendar_Del_Span1');
}

function TotalSoftCal_DelEv_Yes(Total_Soft_CalEv_ID) {
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,

            action: 'TotalSoftCal_DelEv',
            foobar: Total_Soft_CalEv_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success === true) {
                location.reload();
            } else {
                console.error("Error during delete proccess");
            }
        }
    });
}

function Total_Soft_CalEv_AMD2_But1() {
    jQuery('.Total_Soft_Cal_AMD2').animate({
        'opacity': 0
    }, 500);
    jQuery('.Total_Soft_AMMTable1').animate({
        'opacity': 0
    }, 500);
    jQuery('.Total_Soft_AMOTable1').animate({
        'opacity': 0
    }, 500);
    jQuery('.Total_Soft_Cal_Save_Ev').animate({
        'opacity': 1
    }, 500);
    jQuery('.Total_Soft_Cal_Update_Ev').animate({
        'opacity': 0
    }, 500);
    jQuery('.Total_Soft_Cal_Color').alphaColorPicker();
    jQuery('.wp-picker-holder').addClass('alpha-picker-holder');
    setTimeout(function() {
        jQuery('.Total_Soft_Cal_AMD2').css('display', 'none');
        jQuery('.Total_Soft_AMMTable1').css('display', 'none');
        jQuery('.Total_Soft_AMOTable1').css('display', 'none');
        jQuery('.Total_Soft_Cal_Save_Ev').css('display', 'block');
        jQuery('.Total_Soft_Cal_Update_Ev').css('display', 'none');
        jQuery('.Total_Soft_Cal_AMD3').css('display', 'block');
        jQuery('.Total_Soft_AMEvTable').css('display', 'table');
        Total_Soft_Cal_Editor();
    }, 500)
    setTimeout(function() {
        jQuery('.Total_Soft_Cal_AMD3').animate({
            'opacity': 1
        }, 500);
        jQuery('.Total_Soft_AMEvTable').animate({
            'opacity': 1
        }, 500);
    }, 500)
}

function TotalSoftCalendar_URL_Clicked() {
    	var nIntervId = setInterval(function(){
    		var code = jQuery('#TotalSoftCalendar_URL_1').val();
    		if(code.indexOf('https://www.youtube.com/')>0)
    		{
    			if(code.indexOf('list')>0 || code.indexOf('index')>0)
    			{
    				if(code.indexOf('embed')>0)
    				{
    					var TotalSoftCodes1=code.split('[embed]');
    					var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
    					var TotalSoftCodes3=TotalSoftCodes2[0].split('www.youtube.com/watch?v=');
    					if(TotalSoftCodes3[1].length != 11) { TotalSoftCodes3[1] = TotalSoftCodes3[1].substr(0,11); }
    					jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodes3[1]);
    					jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodes3[1]);
    					jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodes3[1]+'/mqdefault.jpg');

    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0){ clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    				}
    				else
    				{
    					var TotalSoftCodes1 = code.split('<a href="https://www.youtube.com/');
    					var TotalSoftCodes2= TotalSoftCodes1[1].split("=");
    					var TotalSoftCodeSrc = TotalSoftCodes2[1].split('&');
    					jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodeSrc[0]); 
    					jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
    					jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
    					
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    				}
    			}
    			else if(code.indexOf('embed')>0)
    			{
    				var TotalSoftCodes1=code.split('[embed]');
    				var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
    				if(TotalSoftCodes2[0].indexOf('watch?')>0)
    				{
    					var TotalSoftCodes3=TotalSoftCodes2[0].split('=');
    					if(TotalSoftCodes3[1].length != 11) { TotalSoftCodes3[1] = TotalSoftCodes3[1].substr(0,11); }
    					
    					jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodes3[1]); 
    					jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodes3[1]);
    					jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodes3[1]+'/mqdefault.jpg');
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    				}
    				else if(TotalSoftCodes2[0].indexOf('/embed/')>0)
    				{
    					var TotalSoftCodes3=TotalSoftCodes2[0].split('/embed/');
    					if(TotalSoftCodes3[1].length != 11) { TotalSoftCodes3[1] = TotalSoftCodes3[1].substr(0,11); }

    					jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodes3[1]);
    					jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodes3[1]+'/mqdefault.jpg');
    					jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/watch?v='+TotalSoftCodes3[1]);

    					if(jQuery('#TotalSoftGallery_Video_URL_2').val().length>0){ clearInterval(nIntervId); jQuery('#TotalSoftGallery_Video_URL_1').val(''); }
    				}
    				else
    				{
    					var TotalSoftCodeSrc=TotalSoftCodes2[0];
    					var TotalSoftImsrc=TotalSoftCodeSrc.split('embed/');

    					jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftImsrc[1]); 
    					jQuery('#TotalSoftCalendar_URL_Video_2').val(TotalSoftCodeSrc);
    					jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftImsrc[1]+'/mqdefault.jpg');
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    				}
    			}
    			else
    			{
    				var TotalSoftCodes2= TotalSoftCodes1[1].split('=');
    				var TotalSoftCodeSrc = TotalSoftCodes2[1].split('">https://');

    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodeSrc[0]); 
    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
    				jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
    				if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    			}
    		}
    		else if(code.indexOf('https://youtu.be/')>0)
    		{
    			if(code.indexOf('embed')>0)
    			{
    				var TotalSoftCodes1=code.split('[embed]');
    				var TotalSoftCodes2=TotalSoftCodes1[1].split('[/embed]');
    				var TotalSoftCodes3=TotalSoftCodes2[0].split('youtu.be/');
    				if(TotalSoftCodes3[1].length != 11) { TotalSoftCodes3[1] = TotalSoftCodes3[1].substr(0,11); }

    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodes3[1]);
    				jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodes3[1]+'/mqdefault.jpg');
    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodes3[1]);

    				if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0){ clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    			}
    			else
    			{
    				var TotalSoftCodes1 = code.split('<a href="https://youtu.be/'); 
    				var TotalSoftCodeSrc = TotalSoftCodes1[1].split('">https://');

    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://www.youtube.com/embed/'+TotalSoftCodeSrc[0]);
    				jQuery('#TotalSoftCalendar_URL_Image_2').val('http://img.youtube.com/vi/'+TotalSoftCodeSrc[0]+'/mqdefault.jpg');
    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://www.youtube.com/watch?v='+TotalSoftCodeSrc[0]);

    				if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    			}
    		}
    		else if(code.indexOf('https://vimeo.com/')>0)
    		{
    			if(code.indexOf('embed')>0)
    			{
    				var s1=code.split('[embed]https://vimeo.com/');
    				var src=s1[1].split('[/embed]');
    				if(src[0].length>9)
    				{
    					var real_src=src[0].split('/');
    					src[0]=real_src[2];
    				}
    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://player.vimeo.com/video/'+src[0]);
    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://vimeo.com/'+src[0]);
					wp.apiRequest({
						url: wp.media.view.settings.oEmbedProxyUrl,
						data: {
							url: 'https://player.vimeo.com/video/'+src[0]
						},
						beforeSend: function() {
						},
						type: 'GET',
						dataType: 'json',
						context: this
					}).done(function(response) {
						jQuery('#TotalSoftCalendar_URL_Image_2').val(response.thumbnail_url);
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }

					}).fail(function() {
						console.error("error")
						return false;
					});
    			}
    			else if(code.indexOf('player')>0)
    			{
    				var s1 = code.split('<a href="https://player.vimeo.com/video/'); 
    				var src = s1[1].split('">https://');
    				if(src[0].length>9)
    				{
    					var real_src=src[0].split('/');
    					src[0]=real_src[2];
    				}
    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://vimeo.com/'+src[0]); 
    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://player.vimeo.com/video/'+src[0]);
					wp.apiRequest({
						url: wp.media.view.settings.oEmbedProxyUrl,
						data: {
							url: 'https://player.vimeo.com/video/'+src[0]
						},
						beforeSend: function() {
						},
						type: 'GET',
						dataType: 'json',
						context: this
					}).done(function(response) {
						jQuery('#TotalSoftCalendar_URL_Image_2').val(response.thumbnail_url);
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
					}).fail(function() {
						console.error("error")
						return false;
					});

    			}
    			else
    			{
    				var s1 = code.split('<a href="https://vimeo.com/'); 
    				var src = s1[1].split('">https://');
    				if(src[0].length>9)
    				{
    					var real_src=src[0].split('/');
    					src[0]=real_src[2];
    				}
    				jQuery('#TotalSoftCalendar_URL_Video_2').val('https://player.vimeo.com/video/'+src[0]);
    				jQuery('#TotalSoftCalendar_URL_Video_1').val('https://vimeo.com/'+src[0]);
					wp.apiRequest({
						url: wp.media.view.settings.oEmbedProxyUrl,
						data: {
							url: 'https://player.vimeo.com/video/'+src[0]
						},
						beforeSend: function() {
						},
						type: 'GET',
						dataType: 'json',
						context: this
					}).done(function(response) {
						jQuery('#TotalSoftCalendar_URL_Image_2').val(response.thumbnail_url);
    					if(jQuery('#TotalSoftCalendar_URL_Video_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }

					}).fail(function() {
						console.error("error")
						return false;
					});
    			}
    		}
    		else if(code.indexOf('img')>0)
    		{
    			var s=code.split('src="'); 
    			var src=s[1].split('"');
    			jQuery('#TotalSoftCalendar_URL_Video_1').val(src[0]);
    			jQuery('#TotalSoftCalendar_URL_Image_2').val(src[0]);
    			if(jQuery('#TotalSoftCalendar_URL_Image_2').val().length>0) { clearInterval(nIntervId); jQuery('#TotalSoftCalendar_URL_1').val(''); }
    		}
    	},100)
}

function TotalSoftCal_EditCl(Total_Soft_CalEv_ID) {
    jQuery.ajax({
        type: 'POST',
        url: ts_calendar_object.ajaxurl,
        data: {
            tsc_nonce: ts_calendar_object.tsc_nonce,
            action: 'TotalSoftCalEv_Clon',
            foobar: Total_Soft_CalEv_ID,
        },
        beforeSend: function() {
            jQuery('.Total_Soft_Cal_Loading').css('display', 'block');
        },
        success: function(response) {
            if (response.success === true) {
                location.reload();
            } else {
                console.error("Error during clone proccess");
            }
        }
    });
}

function TS_Cal_Del_Vid_Cl() {
    jQuery('#TotalSoftCalendar_URL_Video_2').val('');
    jQuery('#TotalSoftCalendar_URL_Video_1').val('');
    jQuery('#TotalSoftCalendar_URL_Image_2').val('');
}

function Total_Soft_Cal_Editor() {
    tinymce.init({
        selector: '#TotalSoftCal_EvDesc',
        menubar: false,
        statusbar: false,
        height: 250,
        plugins: [
            'advlist autolink lists link image charmap print preview hr',
            'searchreplace wordcount code media ',
            'insertdatetime save table contextmenu directionality',
            'paste textcolor colorpicker textpattern imagetools codesample'
        ],
        toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
        fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
        font_formats: 'Amaranth = Amaranth;Anton = Anton;Battambang = Battambang;Baumans = Baumans;Bungee Shade = Bungee Shade;Butcherman = Butcherman;Cabin = Cabin;Cabin Sketch = Cabin Sketch;Cairo = Cairo;Damion  = Damion ;Eagle Lake = Eagle Lake;East Sea Dokdo = East Sea Dokdo;Fira Sans Condensed  = Fira Sans Condensed ;Fira Sans Extra Condensed = Fira Sans Extra Condensed;Gafata  = Gafata ;Jacques Francois = Jacques Francois;Headland One = Headland One;Katibeh = Katibeh;Monsieur La Doulaise = Monsieur La Doulaise;Mr De Haviland = Mr De Haviland;Nova Script = Nova Script;Nova Square = Nova Square;Odor Mean Chey = Odor Mean Chey;Offside = Offside;Old Standard TT  = Old Standard TT ;Oldenburg = Oldenburg;Oxygen  = Oxygen ;Oxygen Mono = Oxygen Mono;Princess Sofia = Princess Sofia;Prociono = Prociono;Prompt  = Prompt ;Prosto One = Prosto One;Proza Libre = Proza Libre;Quicksand = Quicksand;Quintessential = Quintessential;Qwigley = Qwigley;Racing Sans One  = Racing Sans One ;Radley  = Radley ;Rajdhani = Rajdhani;Rakkas  = Rakkas ;Raleway = Raleway;Raleway Dots = Raleway Dots;Ramabhadra = Ramabhadra;Ramaraja = Ramaraja;Rosarivo = Rosarivo;Revalia = Revalia;Siemreap = Siemreap;Sigmar One = Sigmar One;Signika = Signika;Signika Negative = Signika Negative;Simonetta = Simonetta;Tajawal = Tajawal;Tangerine = Tangerine;Taprom  = Taprom ;Tauri = Tauri;Taviraj = Taviraj;Teko = Teko;Telex = Telex;Tenali Ramakrishna   = Tenali Ramakrishna  ;Tenor Sans = Tenor Sans;Text Me One = Text Me One;The Girl Next Door   = The Girl Next Door  ;Tienne  = Tienne ;Tillana = Tillana;Timmana = Timmana;Tinos = Tinos;Titan One = Titan One'
    });
}

function Total_Soft_Cal_Desc_1() {
    jQuery('#TotalSoftCal_EvDesc_1').val(tinyMCE.get('TotalSoftCal_EvDesc').getContent());
}

function TotalSoftCal_EventSort() {
    jQuery('.Total_Soft_AMOTable1 tbody').sortable({
        update: function(event, ui) {
            jQuery(this).find('tr').each(function(i) {
                jQuery(this).find('td:nth-child(1)').html((i + 1));
                jQuery(this).find('td:nth-child(5)').find('input[type=text]').attr('name', 'TSoft_Cal_Move_ID_' + (i + 1));
                TotalSoftCal_EventSort1();
            });
        }
    })
}

function TotalSoftCal_EventSort1() {
    jQuery('.Total_Soft_Cal_AMD2_But1').css('opacity', '1');
}

function Total_Soft_CalEv_AMD2_But3() {
    jQuery('.Total_Soft_Cal_AMD2_But1').css('opacity', '0');
}