<?php 
function getDomain()//function for getting domain of site
{
	$CI = &get_instance();
	return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/", "$1", $CI->config->slash_item('base_url'));
}

function getWebinfo()//function for getting website info
{
	$cih = &get_instance();
	$obj = $cih->common_model->select_where_return_row('*', 'our_websites', array('website_name' => getDomain()));
	if ($obj) {
		return $obj;
	} else {
		return '';
	}
}

function returnSlug()// function for return slug  of site
{
	if ($_SERVER['HTTP_HOST'] == "localhost") {
		$slug = 'AST';
	} else {
		$slug = getWebinfo()->slug;
	}

	return $slug;
}
?>