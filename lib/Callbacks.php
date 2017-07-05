<?php
namespace PromisePay;

class Callback {

	#Create callback
	public function create($params) {
		PromisePay::RestClient('post', 'callbacks/', $params);
		return PromisePay::getDecodedResponse('callbacks');
	}
	
	#List callbacks
	public function getList($params = null) {
	    PromisePay::RestClient('get', 'callbacks', $params);
		return PromisePay::getDecodedResponse('callbacks');
	}
	
	#Show callback
	public function get($id) {
	    	PromisePay::RestClient('get', 'callbacks/' . $id);
	        return PromisePay::getDecodedResponse('callbacks');
	}
	
	#Update callback
	public function update($id, $params) {
   		PromisePay::RestClient('patch', 'callbacks/' . $id . '/', $params);
 		return PromisePay::getDecodedResponse('callbacks');
    	}

	#Delete callback
	public function delete($id) {
	        PromisePay::RestClient('delete', 'callbacks/' . $id);
	    	return PromisePay::getDecodedResponse('callbacks');
	}
	
	#List callback responses
	public function getListOfResponses($id) {
	        PromisePay::RestClient('get', 'callbacks/' . $id . '/responses');
	    	return PromisePay::getDecodedResponse('callbacks');
	}


	#Show callback responses
	public function getResponse($id) {
	  		PromisePay::RestClient('get', 'callbacks/' . $callback_id . '/responses' . $id);
	    	return PromisePay::getDecodedResponse('callbacks');
	}


}