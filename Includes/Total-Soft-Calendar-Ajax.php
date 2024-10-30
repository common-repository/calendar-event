<?php
	add_action( 'wp_ajax_TotalSoftCal_Edit', 'TotalSoftCal_Edit_Callback' );
	function TotalSoftCal_Edit_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_Cal_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name1 = $wpdb->prefix . "totalsoft_cal_1";
		$table_name4 = $wpdb->prefix . "totalsoft_cal_types";
		$table_name5 = $wpdb->prefix . "totalsoft_cal_2";
		$table_name7 = $wpdb->prefix . "totalsoft_cal_3";
		$table_name9 = $wpdb->prefix . "totalsoft_cal_4";
		$Total_Soft_Cal_Types = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $Total_Soft_Cal_ID),ARRAY_A);
		if($Total_Soft_Cal_Types["TotalSoftCal_Type"] == 'Event Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name1 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID),ARRAY_A);
		}
		else if($Total_Soft_Cal_Types["TotalSoftCal_Type"] == 'Simple Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID),ARRAY_A);
		}
		else if($Total_Soft_Cal_Types["TotalSoftCal_Type"] == 'Flexible Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID),ARRAY_A);
		}
		else if($Total_Soft_Cal_Types["TotalSoftCal_Type"] == 'TimeLine Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID),ARRAY_A);
		}
		wp_send_json_success($Total_Soft_Cal);
	}

	add_action( 'wp_ajax_TotalSoftCal_Edit1', 'TotalSoftCal_Edit1_Callback' );
	function TotalSoftCal_Edit1_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_Cal_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name8 = $wpdb->prefix . "totalsoft_cal_part";
		$Total_Soft_Cal_Part = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));
		wp_send_json_success($Total_Soft_Cal_Part);
	}

	add_action( 'wp_ajax_TotalSoftCal_Clone', 'TotalSoftCal_Clone_Callback' );
	function TotalSoftCal_Clone_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_Cal_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name1 = $wpdb->prefix . "totalsoft_cal_1";
		$table_name2 = $wpdb->prefix . "totalsoft_cal_ids";
		$table_name3 = $wpdb->prefix . "totalsoft_cal_events";
		$table_name4 = $wpdb->prefix . "totalsoft_cal_types";
		$table_name5 = $wpdb->prefix . "totalsoft_cal_2";
		$table_name7 = $wpdb->prefix . "totalsoft_cal_3";
		$table_name8 = $wpdb->prefix . "totalsoft_cal_part";
		$table_name9 = $wpdb->prefix . "totalsoft_cal_4";

		$Total_Soft_Cal_Types = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $Total_Soft_Cal_ID));

		if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Event Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Simple Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Flexible Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'TimeLine Calendar')
		{
			$Total_Soft_Cal = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));
		}

		$Total_Soft_Cal_Part = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftCal_ID = %s", $Total_Soft_Cal_ID));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name4 (id, TotalSoftCal_Name, TotalSoftCal_Type) VALUES (%d, %s, %s)", '', $Total_Soft_Cal_Types[0]->TotalSoftCal_Name, $Total_Soft_Cal_Types[0]->TotalSoftCal_Type));

		$New_Cal_ID = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d order by id desc limit 1",0));
		$New_Total_SoftID = $New_Cal_ID[0]->id;
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, Cal_ID) VALUES (%d, %s)", '', $New_Total_SoftID));

		if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Event Calendar')
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, TotalSoftCal_ID, TotalSoftCal_Name, TotalSoftCal_Type, TotalSoftCal_BgCol, TotalSoftCal_GrCol, TotalSoftCal_GW, TotalSoftCal_BW, TotalSoftCal_BStyle, TotalSoftCal_BCol, TotalSoftCal_BSCol, TotalSoftCal_MW, TotalSoftCal_HBgCol, TotalSoftCal_HCol, TotalSoftCal_HFS, TotalSoftCal_HFF, TotalSoftCal_WBgCol, TotalSoftCal_WCol, TotalSoftCal_WFS, TotalSoftCal_WFF, TotalSoftCal_LAW, TotalSoftCal_LAWS, TotalSoftCal_LAWC, TotalSoftCal_DBgCol, TotalSoftCal_DCol, TotalSoftCal_DFS, TotalSoftCal_TBgCol, TotalSoftCal_TCol, TotalSoftCal_TFS, TotalSoftCal_TNBgCol, TotalSoftCal_HovBgCol, TotalSoftCal_HovCol, TotalSoftCal_NumPos, TotalSoftCal_WDStart, TotalSoftCal_RefIcCol, TotalSoftCal_RefIcSize, TotalSoftCal_ArrowType, TotalSoftCal_ArrowLeft, TotalSoftCal_ArrowRight, TotalSoftCal_ArrowCol, TotalSoftCal_ArrowSize, TotalSoftCal_BackIconType, TotalSoftCal_DFF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '' , $New_Total_SoftID, $Total_Soft_Cal[0]->TotalSoftCal_Name, $Total_Soft_Cal[0]->TotalSoftCal_Type, $Total_Soft_Cal[0]->TotalSoftCal_BgCol, $Total_Soft_Cal[0]->TotalSoftCal_GrCol, $Total_Soft_Cal[0]->TotalSoftCal_GW, $Total_Soft_Cal[0]->TotalSoftCal_BW, $Total_Soft_Cal[0]->TotalSoftCal_BStyle, $Total_Soft_Cal[0]->TotalSoftCal_BCol, $Total_Soft_Cal[0]->TotalSoftCal_BSCol, $Total_Soft_Cal[0]->TotalSoftCal_MW, $Total_Soft_Cal[0]->TotalSoftCal_HBgCol, $Total_Soft_Cal[0]->TotalSoftCal_HCol, $Total_Soft_Cal[0]->TotalSoftCal_HFS, $Total_Soft_Cal[0]->TotalSoftCal_HFF, $Total_Soft_Cal[0]->TotalSoftCal_WBgCol, $Total_Soft_Cal[0]->TotalSoftCal_WCol, $Total_Soft_Cal[0]->TotalSoftCal_WFS, $Total_Soft_Cal[0]->TotalSoftCal_WFF, $Total_Soft_Cal[0]->TotalSoftCal_LAW, $Total_Soft_Cal[0]->TotalSoftCal_LAWS, $Total_Soft_Cal[0]->TotalSoftCal_LAWC, $Total_Soft_Cal[0]->TotalSoftCal_DBgCol, $Total_Soft_Cal[0]->TotalSoftCal_DCol, $Total_Soft_Cal[0]->TotalSoftCal_DFS, $Total_Soft_Cal[0]->TotalSoftCal_TBgCol, $Total_Soft_Cal[0]->TotalSoftCal_TCol, $Total_Soft_Cal[0]->TotalSoftCal_TFS, $Total_Soft_Cal[0]->TotalSoftCal_TNBgCol, $Total_Soft_Cal[0]->TotalSoftCal_HovBgCol, $Total_Soft_Cal[0]->TotalSoftCal_HovCol, $Total_Soft_Cal[0]->TotalSoftCal_NumPos, $Total_Soft_Cal[0]->TotalSoftCal_WDStart, $Total_Soft_Cal[0]->TotalSoftCal_RefIcCol, $Total_Soft_Cal[0]->TotalSoftCal_RefIcSize, $Total_Soft_Cal[0]->TotalSoftCal_ArrowType, $Total_Soft_Cal[0]->TotalSoftCal_ArrowLeft, $Total_Soft_Cal[0]->TotalSoftCal_ArrowRight, $Total_Soft_Cal[0]->TotalSoftCal_ArrowCol, $Total_Soft_Cal[0]->TotalSoftCal_ArrowSize, $Total_Soft_Cal[0]->TotalSoftCal_BackIconType, $Total_Soft_Cal[0]->TotalSoftCal_DFF));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Simple Calendar')
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, TotalSoftCal_ID, TotalSoftCal_Name, TotalSoftCal_Type, TotalSoftCal2_WDStart, TotalSoftCal2_BW, TotalSoftCal2_BS, TotalSoftCal2_BC, TotalSoftCal2_W, TotalSoftCal2_H, TotalSoftCal2_BxShShow, TotalSoftCal2_BxShType, TotalSoftCal2_BxSh, TotalSoftCal2_BxShC, TotalSoftCal2_MBgC, TotalSoftCal2_MC, TotalSoftCal2_MFS, TotalSoftCal2_MFF, TotalSoftCal2_WBgC, TotalSoftCal2_WC, TotalSoftCal2_WFS, TotalSoftCal2_WFF, TotalSoftCal2_LAW_W, TotalSoftCal2_LAW_S, TotalSoftCal2_LAW_C, TotalSoftCal2_DBgC, TotalSoftCal2_DC, TotalSoftCal2_DFS, TotalSoftCal2_TdBgC, TotalSoftCal2_TdC, TotalSoftCal2_TdFS, TotalSoftCal2_EdBgC, TotalSoftCal2_EdC, TotalSoftCal2_EdFS, TotalSoftCal2_HBgC, TotalSoftCal2_HC, TotalSoftCal2_ArrType, TotalSoftCal2_ArrFS, TotalSoftCal2_ArrC, TotalSoftCal2_OmBgC, TotalSoftCal2_OmC, TotalSoftCal2_OmFS, TotalSoftCal2_Ev_HBgC, TotalSoftCal2_Ev_HC, TotalSoftCal2_Ev_HFS, TotalSoftCal2_Ev_HFF, TotalSoftCal2_Ev_HText, TotalSoftCal2_Ev_BBgC, TotalSoftCal2_Ev_TC, TotalSoftCal2_Ev_TFF, TotalSoftCal2_Ev_TFS) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $New_Total_SoftID, $Total_Soft_Cal[0]->TotalSoftCal_Name, $Total_Soft_Cal[0]->TotalSoftCal_Type, $Total_Soft_Cal[0]->TotalSoftCal2_WDStart, $Total_Soft_Cal[0]->TotalSoftCal2_BW, $Total_Soft_Cal[0]->TotalSoftCal2_BS, $Total_Soft_Cal[0]->TotalSoftCal2_BC, $Total_Soft_Cal[0]->TotalSoftCal2_W, $Total_Soft_Cal[0]->TotalSoftCal2_H, $Total_Soft_Cal[0]->TotalSoftCal2_BxShShow, $Total_Soft_Cal[0]->TotalSoftCal2_BxShType, $Total_Soft_Cal[0]->TotalSoftCal2_BxSh, $Total_Soft_Cal[0]->TotalSoftCal2_BxShC, $Total_Soft_Cal[0]->TotalSoftCal2_MBgC, $Total_Soft_Cal[0]->TotalSoftCal2_MC, $Total_Soft_Cal[0]->TotalSoftCal2_MFS, $Total_Soft_Cal[0]->TotalSoftCal2_MFF, $Total_Soft_Cal[0]->TotalSoftCal2_WBgC, $Total_Soft_Cal[0]->TotalSoftCal2_WC, $Total_Soft_Cal[0]->TotalSoftCal2_WFS, $Total_Soft_Cal[0]->TotalSoftCal2_WFF, $Total_Soft_Cal[0]->TotalSoftCal2_LAW_W, $Total_Soft_Cal[0]->TotalSoftCal2_LAW_S, $Total_Soft_Cal[0]->TotalSoftCal2_LAW_C, $Total_Soft_Cal[0]->TotalSoftCal2_DBgC, $Total_Soft_Cal[0]->TotalSoftCal2_DC, $Total_Soft_Cal[0]->TotalSoftCal2_DFS, $Total_Soft_Cal[0]->TotalSoftCal2_TdBgC, $Total_Soft_Cal[0]->TotalSoftCal2_TdC, $Total_Soft_Cal[0]->TotalSoftCal2_TdFS, $Total_Soft_Cal[0]->TotalSoftCal2_EdBgC, $Total_Soft_Cal[0]->TotalSoftCal2_EdC, $Total_Soft_Cal[0]->TotalSoftCal2_EdFS, $Total_Soft_Cal[0]->TotalSoftCal2_HBgC, $Total_Soft_Cal[0]->TotalSoftCal2_HC, $Total_Soft_Cal[0]->TotalSoftCal2_ArrType, $Total_Soft_Cal[0]->TotalSoftCal2_ArrFS, $Total_Soft_Cal[0]->TotalSoftCal2_ArrC, $Total_Soft_Cal[0]->TotalSoftCal2_OmBgC, $Total_Soft_Cal[0]->TotalSoftCal2_OmC, $Total_Soft_Cal[0]->TotalSoftCal2_OmFS, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_HBgC, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_HC, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_HFS, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_HFF, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_HText, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_BBgC, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_TC, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_TFF, $Total_Soft_Cal[0]->TotalSoftCal2_Ev_TFS));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'Flexible Calendar')
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, TotalSoftCal_ID, TotalSoftCal_Name, TotalSoftCal_Type, TotalSoftCal3_MW, TotalSoftCal3_WDStart, TotalSoftCal3_BgC, TotalSoftCal3_GrC, TotalSoftCal3_BBC, TotalSoftCal3_BoxShShow, TotalSoftCal3_BoxShType, TotalSoftCal3_BoxSh, TotalSoftCal3_BoxShC, TotalSoftCal3_H_BgC, TotalSoftCal3_H_BTW, TotalSoftCal3_H_BTC, TotalSoftCal3_H_FF, TotalSoftCal3_H_MFS, TotalSoftCal3_H_MC, TotalSoftCal3_H_YFS, TotalSoftCal3_H_YC, TotalSoftCal3_H_Format, TotalSoftCal3_Arr_Type, TotalSoftCal3_Arr_C, TotalSoftCal3_Arr_S, TotalSoftCal3_Arr_HC, TotalSoftCal3_LAH_W, TotalSoftCal3_LAH_C, TotalSoftCal3_WD_BgC, TotalSoftCal3_WD_C, TotalSoftCal3_WD_FS, TotalSoftCal3_WD_FF, TotalSoftCal3_D_BgC, TotalSoftCal3_D_C, TotalSoftCal3_TD_BgC, TotalSoftCal3_TD_C, TotalSoftCal3_HD_BgC, TotalSoftCal3_HD_C, TotalSoftCal3_ED_C, TotalSoftCal3_ED_HC, TotalSoftCal3_Ev_Format, TotalSoftCal3_Ev_BTW, TotalSoftCal3_Ev_BTC, TotalSoftCal3_Ev_BgC, TotalSoftCal3_Ev_C, TotalSoftCal3_Ev_FS, TotalSoftCal3_Ev_FF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $New_Total_SoftID, $Total_Soft_Cal[0]->TotalSoftCal_Name, $Total_Soft_Cal[0]->TotalSoftCal_Type, $Total_Soft_Cal[0]->TotalSoftCal3_MW, $Total_Soft_Cal[0]->TotalSoftCal3_WDStart, $Total_Soft_Cal[0]->TotalSoftCal3_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_GrC, $Total_Soft_Cal[0]->TotalSoftCal3_BBC, $Total_Soft_Cal[0]->TotalSoftCal3_BoxShShow, $Total_Soft_Cal[0]->TotalSoftCal3_BoxShType, $Total_Soft_Cal[0]->TotalSoftCal3_BoxSh, $Total_Soft_Cal[0]->TotalSoftCal3_BoxShC, $Total_Soft_Cal[0]->TotalSoftCal3_H_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_H_BTW, $Total_Soft_Cal[0]->TotalSoftCal3_H_BTC, $Total_Soft_Cal[0]->TotalSoftCal3_H_FF, $Total_Soft_Cal[0]->TotalSoftCal3_H_MFS, $Total_Soft_Cal[0]->TotalSoftCal3_H_MC, $Total_Soft_Cal[0]->TotalSoftCal3_H_YFS, $Total_Soft_Cal[0]->TotalSoftCal3_H_YC, $Total_Soft_Cal[0]->TotalSoftCal3_H_Format, $Total_Soft_Cal[0]->TotalSoftCal3_Arr_Type, $Total_Soft_Cal[0]->TotalSoftCal3_Arr_C, $Total_Soft_Cal[0]->TotalSoftCal3_Arr_S, $Total_Soft_Cal[0]->TotalSoftCal3_Arr_HC, $Total_Soft_Cal[0]->TotalSoftCal3_LAH_W, $Total_Soft_Cal[0]->TotalSoftCal3_LAH_C, $Total_Soft_Cal[0]->TotalSoftCal3_WD_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_WD_C, $Total_Soft_Cal[0]->TotalSoftCal3_WD_FS, $Total_Soft_Cal[0]->TotalSoftCal3_WD_FF, $Total_Soft_Cal[0]->TotalSoftCal3_D_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_D_C, $Total_Soft_Cal[0]->TotalSoftCal3_TD_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_TD_C, $Total_Soft_Cal[0]->TotalSoftCal3_HD_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_HD_C, $Total_Soft_Cal[0]->TotalSoftCal3_ED_C, $Total_Soft_Cal[0]->TotalSoftCal3_ED_HC, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_Format, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_BTW, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_BTC, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_BgC, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_C, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_FS, $Total_Soft_Cal[0]->TotalSoftCal3_Ev_FF));
		}
		else if($Total_Soft_Cal_Types[0]->TotalSoftCal_Type == 'TimeLine Calendar')
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoftCal_ID, TotalSoftCal_Name, TotalSoftCal_Type, TotalSoftCal4_01, TotalSoftCal4_02, TotalSoftCal4_03, TotalSoftCal4_04, TotalSoftCal4_05, TotalSoftCal4_06, TotalSoftCal4_07, TotalSoftCal4_08, TotalSoftCal4_09, TotalSoftCal4_10, TotalSoftCal4_11, TotalSoftCal4_12, TotalSoftCal4_13, TotalSoftCal4_14, TotalSoftCal4_15, TotalSoftCal4_16, TotalSoftCal4_17, TotalSoftCal4_18, TotalSoftCal4_19, TotalSoftCal4_20, TotalSoftCal4_21, TotalSoftCal4_22, TotalSoftCal4_23, TotalSoftCal4_24, TotalSoftCal4_25, TotalSoftCal4_26, TotalSoftCal4_27, TotalSoftCal4_28, TotalSoftCal4_29, TotalSoftCal4_30, TotalSoftCal4_31, TotalSoftCal4_32, TotalSoftCal4_33, TotalSoftCal4_34, TotalSoftCal4_35, TotalSoftCal4_36, TotalSoftCal4_37, TotalSoftCal4_38, TotalSoftCal4_39) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $New_Total_SoftID, $Total_Soft_Cal[0]->TotalSoftCal_Name, $Total_Soft_Cal[0]->TotalSoftCal_Type, $Total_Soft_Cal[0]->TotalSoftCal4_01, $Total_Soft_Cal[0]->TotalSoftCal4_02, $Total_Soft_Cal[0]->TotalSoftCal4_03, $Total_Soft_Cal[0]->TotalSoftCal4_04, $Total_Soft_Cal[0]->TotalSoftCal4_05, $Total_Soft_Cal[0]->TotalSoftCal4_06, $Total_Soft_Cal[0]->TotalSoftCal4_07, $Total_Soft_Cal[0]->TotalSoftCal4_08, $Total_Soft_Cal[0]->TotalSoftCal4_09, $Total_Soft_Cal[0]->TotalSoftCal4_10, $Total_Soft_Cal[0]->TotalSoftCal4_11, $Total_Soft_Cal[0]->TotalSoftCal4_12, $Total_Soft_Cal[0]->TotalSoftCal4_13, $Total_Soft_Cal[0]->TotalSoftCal4_14, $Total_Soft_Cal[0]->TotalSoftCal4_15, $Total_Soft_Cal[0]->TotalSoftCal4_16, $Total_Soft_Cal[0]->TotalSoftCal4_17, $Total_Soft_Cal[0]->TotalSoftCal4_18, $Total_Soft_Cal[0]->TotalSoftCal4_19, $Total_Soft_Cal[0]->TotalSoftCal4_20, $Total_Soft_Cal[0]->TotalSoftCal4_21, $Total_Soft_Cal[0]->TotalSoftCal4_22, $Total_Soft_Cal[0]->TotalSoftCal4_23, $Total_Soft_Cal[0]->TotalSoftCal4_24, $Total_Soft_Cal[0]->TotalSoftCal4_25, $Total_Soft_Cal[0]->TotalSoftCal4_26, $Total_Soft_Cal[0]->TotalSoftCal4_27, $Total_Soft_Cal[0]->TotalSoftCal4_28, $Total_Soft_Cal[0]->TotalSoftCal4_29, $Total_Soft_Cal[0]->TotalSoftCal4_30, $Total_Soft_Cal[0]->TotalSoftCal4_31, $Total_Soft_Cal[0]->TotalSoftCal4_32, $Total_Soft_Cal[0]->TotalSoftCal4_33, $Total_Soft_Cal[0]->TotalSoftCal4_34, $Total_Soft_Cal[0]->TotalSoftCal4_35, $Total_Soft_Cal[0]->TotalSoftCal4_36, $Total_Soft_Cal[0]->TotalSoftCal4_37, $Total_Soft_Cal[0]->TotalSoftCal4_38, $Total_Soft_Cal[0]->TotalSoftCal4_39));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoftCal_ID, TotalSoftCal_Name, TotalSoftCal_Type, TotalSoftCal_01, TotalSoftCal_02, TotalSoftCal_03, TotalSoftCal_04, TotalSoftCal_05, TotalSoftCal_06, TotalSoftCal_07, TotalSoftCal_08, TotalSoftCal_09, TotalSoftCal_10, TotalSoftCal_11, TotalSoftCal_12, TotalSoftCal_13, TotalSoftCal_14, TotalSoftCal_15, TotalSoftCal_16, TotalSoftCal_17, TotalSoftCal_18, TotalSoftCal_19, TotalSoftCal_20, TotalSoftCal_21, TotalSoftCal_22, TotalSoftCal_23, TotalSoftCal_24, TotalSoftCal_25, TotalSoftCal_26, TotalSoftCal_27, TotalSoftCal_28, TotalSoftCal_29, TotalSoftCal_30) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $New_Total_SoftID, $Total_Soft_Cal_Part[0]->TotalSoftCal_Name, $Total_Soft_Cal_Part[0]->TotalSoftCal_Type, $Total_Soft_Cal_Part[0]->TotalSoftCal_01, $Total_Soft_Cal_Part[0]->TotalSoftCal_02, $Total_Soft_Cal_Part[0]->TotalSoftCal_03, $Total_Soft_Cal_Part[0]->TotalSoftCal_04, $Total_Soft_Cal_Part[0]->TotalSoftCal_05, $Total_Soft_Cal_Part[0]->TotalSoftCal_06, $Total_Soft_Cal_Part[0]->TotalSoftCal_07, $Total_Soft_Cal_Part[0]->TotalSoftCal_08, $Total_Soft_Cal_Part[0]->TotalSoftCal_09, $Total_Soft_Cal_Part[0]->TotalSoftCal_10, $Total_Soft_Cal_Part[0]->TotalSoftCal_11, $Total_Soft_Cal_Part[0]->TotalSoftCal_12, $Total_Soft_Cal_Part[0]->TotalSoftCal_13, $Total_Soft_Cal_Part[0]->TotalSoftCal_14, $Total_Soft_Cal_Part[0]->TotalSoftCal_15, $Total_Soft_Cal_Part[0]->TotalSoftCal_16, $Total_Soft_Cal_Part[0]->TotalSoftCal_17, $Total_Soft_Cal_Part[0]->TotalSoftCal_18, $Total_Soft_Cal_Part[0]->TotalSoftCal_19, $Total_Soft_Cal_Part[0]->TotalSoftCal_20, $Total_Soft_Cal_Part[0]->TotalSoftCal_21, $Total_Soft_Cal_Part[0]->TotalSoftCal_22, $Total_Soft_Cal_Part[0]->TotalSoftCal_23, $Total_Soft_Cal_Part[0]->TotalSoftCal_24, $Total_Soft_Cal_Part[0]->TotalSoftCal_25, $Total_Soft_Cal_Part[0]->TotalSoftCal_26, $Total_Soft_Cal_Part[0]->TotalSoftCal_27, $Total_Soft_Cal_Part[0]->TotalSoftCal_28, $Total_Soft_Cal_Part[0]->TotalSoftCal_29, $Total_Soft_Cal_Part[0]->TotalSoftCal_30));
		wp_send_json_success();
	}


	add_action( 'wp_ajax_TotalSoftCal_DelEv', 'TotalSoftCal_DelEv_Callback' );
	function TotalSoftCal_DelEv_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_CalEv_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name3  = $wpdb->prefix . "totalsoft_cal_events";
		$table_name6  = $wpdb->prefix . "totalsoft_cal_events_p2";
		$table_name10 = $wpdb->prefix . "totalsoft_cal_events_p3";
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name3 WHERE id = %d", (int) $Total_Soft_CalEv_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name6 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name10 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID));
		wp_send_json_success();
	}

	add_action( 'wp_ajax_TotalSoftCal_EditEv', 'TotalSoftCal_EditEv_Callback' );
	function TotalSoftCal_EditEv_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_CalEv_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name3 = $wpdb->prefix . "totalsoft_cal_events";
		$Total_Soft_Cal_Ev = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name3 WHERE id = %d", $Total_Soft_CalEv_ID));
		wp_send_json_success($Total_Soft_Cal_Ev);
	}

	add_action( 'wp_ajax_TotalSoftCal_EditEv_Desc', 'TotalSoftCal_EditEv_Desc_Callback' );
	function TotalSoftCal_EditEv_Desc_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_CalEv_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name6 = $wpdb->prefix . "totalsoft_cal_events_p2";
		$Total_Soft_Cal_Ev = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID),ARRAY_A);
		$Total_Soft_Cal_Ev["TotalSoftCal_EvDesc"] = html_entity_decode($Total_Soft_Cal_Ev["TotalSoftCal_EvDesc"]);
		wp_send_json_success($Total_Soft_Cal_Ev);
	}

	add_action( 'wp_ajax_TotalSoftCal_EditEv_Rec', 'TotalSoftCal_EditEv_Rec_Callback' );
	function TotalSoftCal_EditEv_Rec_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_CalEv_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name10 = $wpdb->prefix . "totalsoft_cal_events_p3";
		$Total_Soft_Cal_Ev = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name10 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID),ARRAY_A);
		wp_send_json_success($Total_Soft_Cal_Ev);
	}


	add_action( 'wp_ajax_TotalSoftCalEv_Clon', 'TotalSoftCalEv_Clon_Callback' );
	function TotalSoftCalEv_Clon_Callback()
	{
		if ( !isset($_POST['tsc_nonce']) || $_POST['tsc_nonce'] == "" ||  ! wp_verify_nonce( $_POST['tsc_nonce'], 'tsc_admin_nonce_field' ) ) {
			wp_send_json_error("Not valid nonce.");
		}
		$Total_Soft_CalEv_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name3  = $wpdb->prefix . "totalsoft_cal_events";
		$table_name6  = $wpdb->prefix . "totalsoft_cal_events_p2";
		$table_name10 = $wpdb->prefix . "totalsoft_cal_events_p3";
		$Total_Soft_Cal_Ev_1 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id = %d", $Total_Soft_CalEv_ID));
		$Total_Soft_Cal_Ev_2 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID));
		$Total_Soft_Cal_Ev_3 = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE TotalSoftCal_EvCal = %s", $Total_Soft_CalEv_ID));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name3 (id, TotalSoftCal_EvName, TotalSoftCal_EvCal, TotalSoftCal_EvStartDate, TotalSoftCal_EvEndDate, TotalSoftCal_EvURL, TotalSoftCal_EvURLNewTab, TotalSoftCal_EvStartTime, TotalSoftCal_EvEndTime, TotalSoftCal_EvColor) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvName, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvCal, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvStartDate, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvEndDate, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvURL, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvURLNewTab, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvStartTime, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvEndTime, $Total_Soft_Cal_Ev_1[0]->TotalSoftCal_EvColor));
		$TotalSoftCalEvent = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d order by id desc limit 1",0));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, TotalSoftCal_EvDesc, TotalSoftCal_EvImg, TotalSoftCal_EvVid_Src, TotalSoftCal_EvVid_Iframe, TotalSoftCal_EvCal) VALUES (%d, %s, %s, %s, %s, %s)", '', $Total_Soft_Cal_Ev_2[0]->TotalSoftCal_EvDesc, $Total_Soft_Cal_Ev_2[0]->TotalSoftCal_EvImg, $Total_Soft_Cal_Ev_2[0]->TotalSoftCal_EvVid_Src, $Total_Soft_Cal_Ev_2[0]->TotalSoftCal_EvVid_Iframe, $TotalSoftCalEvent[0]->id));
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, TotalSoftCal_EvCal, TotalSoftCal_EvRec) VALUES (%d, %s, %s)", '', $TotalSoftCalEvent[0]->id, $Total_Soft_Cal_Ev_3[0]->TotalSoftCal_EvRec));
		wp_send_json_success();
	}

?>