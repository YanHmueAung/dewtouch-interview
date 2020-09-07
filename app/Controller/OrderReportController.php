<?php
	class OrderReportController extends AppController{

		public function index(){

			$this->setFlash('Multidimensional Array.');

			$this->loadModel('Order');
			$orders = $this->Order->find('all',array('conditions'=>array('Order.valid'=>1),'recursive'=>2));
			// debug($orders);exit;

			$this->loadModel('Portion');
			$portions = $this->Portion->find('all',array('conditions'=>array('Portion.valid'=>1),'recursive'=>2));




			$showOrder = array();
			foreach($orders as $index => $order) {
				$count = $index;
				$ingredients = array();
				foreach($order['OrderDetail'] as $detail) {
					foreach($portions as $portion) {
						foreach($portion['PortionDetail'] as $pdetail) {
							if ($detail['item_id'] == $pdetail['Portion']['item_id']) {
								$qty = $pdetail['value'] * $detail['quantity'];
								if (count($ingredients) > 0) {
									foreach($ingredients as $key => $ingredient) {
										if ($key == $pdetail['Part']['name']) {
											$qty += $ingredient;
											$ingredients[$pdetail['Part']['name']] = $qty;
										} else {
											$ingredients[$pdetail['Part']['name']] = $qty;
										}
									}
								} else {
									$ingredients[$pdetail['Part']['name']] = $qty;
								}
							}
						}
					}
				}
				$showOrder['Order '+$count] = $ingredients;
			}






			// debug($portions);exit;


			// To Do - write your own array in this format
			$order_reports = array('Order 1' => array(
										'Ingredient A' => 1,
										'Ingredient B' => 12,
										'Ingredient C' => 3,
										'Ingredient G' => 5,
										'Ingredient H' => 24,
										'Ingredient J' => 22,
										'Ingredient F' => 9,
									),
								  'Order 2' => array(
								  		'Ingredient A' => 13,
								  		'Ingredient B' => 2,
								  		'Ingredient G' => 14,
								  		'Ingredient I' => 2,
								  		'Ingredient D' => 6,
								  	),
								);

			// ...

			$this->set('order_reports',$showOrder);

			$this->set('title',__('Orders Report'));
		}

		public function Question(){

			$this->setFlash('Multidimensional Array.');

			$this->loadModel('Order');
			$orders = $this->Order->find('all',array('conditions'=>array('Order.valid'=>1),'recursive'=>2));

			// debug($orders);exit;

			$this->set('orders',$orders);

			$this->loadModel('Portion');
			$portions = $this->Portion->find('all',array('conditions'=>array('Portion.valid'=>1),'recursive'=>2));
				
			// debug($portions);exit;

			$this->set('portions',$portions);

			$this->set('title',__('Question - Orders Report'));
		}

	}