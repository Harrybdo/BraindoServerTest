<?php
/*
Template Name: Work
*/
get_header(); 

$page_header = CFS()->get('page_header');
$page_sub_header = CFS()->get('page_sub_header');

$case_studies = CFS()->get('case_study_loop');

foreach($case_studies as $study){
	$study_header = $study['case_study_header'];
	$study_infographic_url = $study['case_study_infographic_url'];
	$study_text = $study['case_study_text'];
	$study_services_header = $study['services_header'];
	
	$study_services = $study['service_block_loop'];
	foreach($study_services as $service){
		$block_url = $service['small_service_block_url'];
	}
	$results_text = $study['results_text'];
	$results_href = $study['results_href'];
}


?>