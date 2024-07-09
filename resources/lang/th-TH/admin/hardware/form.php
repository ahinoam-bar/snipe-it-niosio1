<?php

return [
    'bulk_delete'		=> 'ยืนยันการลบเนื้อหาเป็นกลุ่ม',
    'bulk_restore'      => 'Confirm Bulk Restore Assets', 
  'bulk_delete_help'	=> 'ตรวจทานเนื้อหาสำหรับการลบจำนวนมากด้านล่าง เมื่อลบแล้วเนื้อหาเหล่านี้สามารถเรียกคืนได้ แต่จะไม่มีการเชื่อมโยงกับผู้ใช้ที่ได้รับมอบหมายอยู่ในขณะนี้อีกต่อไป',
  'bulk_restore_help'	=> 'Review the assets for bulk restoration below. Once restored, these assets will not be associated with any users they were previously assigned to.',
  'bulk_delete_warn'	=> 'คุณกำลังจะลบ: asset_count',
  'bulk_restore_warn'	=> 'You are about to restore :asset_count assets.',
    'bulk_update'		=> 'ปรับปรุงสินทรัพย์แบบหลายรายการ',
    'bulk_update_help'	=> 'ฟอร์มนี้อนุญาตให้คุณปรับปรุงสินทรัพย์แบบหลายรายการในครั้งเดียว เพียงกรอกข้อมูลที่ต้องการเปลี่ยนแปลงลงในช่อง ช่องใดที่ไม่ได้กรอกข้อมูลจะไม่มีการเปลี่ยนแปลงใดๆ ',
    'bulk_update_warn'	=> 'You are about to edit the properties of a single asset.|You are about to edit the properties of :asset_count assets.',
    'bulk_update_with_custom_field' => 'Note the assets are :asset_model_count different types of models.',
    'bulk_update_model_prefix' => 'On Models', 
    'bulk_update_custom_field_unique' => 'This is a unique field and can not be bulk edited.',
    'checkedout_to'		=> 'เช็คเอ้าท์ให้กับ',
    'checkout_date'		=> 'วันที่เช็คเอ้าท์',
    'checkin_date'		=> 'วันที่เช็คอิน',
    'checkout_to'		=> 'เช็คเอ้าท์ให้กับ',
    'cost'				=> 'ราคาซื้อ',
    'create'			=> 'สร้างสินทรัพย์',
    'date'				=> 'วันที่ซื้อ',
    'depreciation'	    => 'การเสื่อมราคา',
    'depreciates_on'	=> 'คิดค่าเสื่อมราคา',
    'default_location'	=> 'ตำแหน่งพื้นฐาน',
    'default_location_phone' => 'Default Location Phone',
    'eol_date'			=> 'วันที่ EOL',
    'eol_rate'			=> 'เรท EOL',
    'expected_checkin'  => 'วันที่เช็คอินที่คาดหวังไว้',
    'expires'			=> 'หมดอายุ',
    'fully_depreciated'	=> 'หมดค่าเสื่อมราคาแล้ว',
    'help_checkout'		=> 'หากคุณประสงค์ที่จะกำหนดสินทรัพย์นี้ในทันที เลือก "Ready to Deploy" จากรายการสถานะด้านบน ',
    'mac_address'		=> 'MAC Address',
    'manufacturer'		=> 'ผู้ผลิต',
    'model'				=> 'โมเดล',
    'months'			=> 'เดือน',
    'name'				=> 'ชื่อสินทรัพย์',
    'notes'				=> 'หมายเหตุ',
    'order'				=> 'หมายเลขสั่งซื้อ',
    'qr'				=> 'QR Code',
    'requestable'		=> 'ผู้ใช้งานอาจร้องขอสินทรัพย์นี้',
    'redirect_to_all'   => 'Return to all :type',
    'redirect_to_type'   => 'Go to :type',
    'redirect_to_checked_out_to'   => 'Go to Checked Out to',
    'select_statustype'	=> 'เลือกประเภทสถานะ',
    'serial'			=> 'ซีเรียล',
    'status'			=> 'สถานะ',
    'tag'				=> 'รหัสทรัพย์สิน',
    'update'			=> 'ปรับปรุงสินทรัพย์',
    'warranty'			=> 'การรับประกัน',
        'warranty_expires'		=> 'การรับประกันหมดอายุ',
    'years'				=> 'ปี',
    'asset_location' => 'Update Asset Location',
    'asset_location_update_default_current' => 'Update default location AND actual location',
    'asset_location_update_default' => 'Update only default location',
    'asset_location_update_actual' => 'Update only actual location',
    'asset_not_deployable' => 'That asset status is not deployable. This asset cannot be checked out.',
    'asset_deployable' => 'That status is deployable. This asset can be checked out.',
    'processing_spinner' => 'Processing... (This might take a bit of time on large files)',
    'optional_infos'  => 'Optional Information',
    'order_details'   => 'Order Related Information'
];
