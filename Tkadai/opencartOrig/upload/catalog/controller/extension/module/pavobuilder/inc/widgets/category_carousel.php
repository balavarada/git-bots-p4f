<?php
class PA_Widget_Category_Carousel extends PA_Widgets {

	public function fields() {
		$this->load->language('extension/module/pavocategorycarousel');
		$this->load->model('catalog/category');
		$get_category = $this->model_catalog_category->getCategories();
		$categories = array();
		foreach ($get_category as $cat_id) {
			$categories[] = array(
				'value'	=> $cat_id['category_id'],
				'label'	=> $cat_id['name']
			);
		}
		$first = reset($categories);
		return array( 
			'mask'		=> array(
				'icon'	=> 'fa fa-copyright',
				'label'	=> $this->language->get( 'entry_category' )
			), 
			'tabs'	=> array(
				'general'		=> array(
					'label'		=> $this->language->get( 'entry_general_text' ),
					'fields'	=> array(
						array(
							'type'	=> 'hidden',
							'name'	=> 'uniqid_id',
							'label'	=> $this->language->get( 'entry_row_id_text' ),
							'desc'	=> $this->language->get( 'entry_column_desc_text' )
						),
						array(
                            'type'  => 'text',
                            'name'  => 'extra_class',
                            'label' => $this->language->get( 'entry_extra_class_text' ),
                            'default' => '',
                            'desc'  => $this->language->get( 'entry_extra_class_desc_text' )
                        ),
						array(
							'type'		=> 'select',
							'name'		=> 'title',
							'label'		=> $this->language->get( 'entry_title' ),
							'default' 	=> 'true',
							'options'	=> array(
								array(
									'value'	=> 'true',
									'label'	=> 'Enabled'
								),
								array(
									'value'	=> 'false',
									'label'	=> 'Disabled'
								)
							)
						),
						array(
							'type'		=> 'text',
							'name'		=> 'title_category',
							'label'		=> $this->language->get( 'entry_extra_category_title_text' ),
							'desc'		=> $this->language->get( 'entry_extra_category_title_desc_text' ),
							'default' 	=> '',
							'language'  => true
						),
						array(
							'type'		=> 'editor',
							'name'		=> 'banner_subtitle',
							'label'		=> $this->language->get( 'entry_extra_banner_subtitle_text' ),
							'default' 	=> '',
							'language'  => true
						),
						array(
							'type'		=> 'text',
							'name'		=> 'button_text',
							'label'		=> $this->language->get( 'entry_banner_button' ),
							'default' 	=> '',
							'language'  => true
						),
						array(
							'type'	=> 'image',
							'name'	=> 'banner',
							'label'	=> $this->language->get( 'entry_banner' )
						),
						array(
							'type'		  => 'text',
							'name'		  => 'banner_size',
							'label'		  => $this->language->get( 'entry_banner_size_text' ),
							'desc'		  => $this->language->get( 'entry_image_size_desc' ),
							'default'	  => 'full',
							'placeholder' => '200x400'
						),
						array(
							'type'		=> 'select',
							'name'		=> 'banner_type',
							'label'		=> $this->language->get( 'entry_banner_type' ),
							'default' 	=> 'left',
							'options'	=> array(
								array(
									'value'	=> 'left',
									'label'	=> 'Left'
								),
								array(
									'value'	=> 'right',
									'label'	=> 'Right'
								)
							)
						),
						array(
							'type'		  => 'text',
							'name'		  => 'product_size',
							'label'		  => $this->language->get( 'entry_product_size_text' ),
							'desc'		  => $this->language->get( 'entry_image_size_desc' ),
							'default'	  => 'full',
							'placeholder' => '200x400'
						),
						array(
							'type'		=> 'select',
							'name'		=> 'category',
							'label'		=> $this->language->get( 'entry_list_category' ),
							'default'	=> $first['value'],
							'options'	=> $categories
						),
						array(
							'type'	  => 'number',
							'name'    => 'item',
							'label'	  => $this->language->get( 'entry_item_text' ),
							'desc'    => $this->language->get( 'entry_item_desc_text' ),
							'default' => 4
						),
						array(
							'type'		=> 'number',
							'name'		=> 'rows',
							'label'		=> $this->language->get( 'entry_rows_text' ),
							'default'	=> 1
						),
						array(
							'type'		=> 'number',
							'name'		=> 'limit',
							'label'		=> $this->language->get( 'entry_limit_text' ),
							'default'	=> 7
						),
						array(
							'type'		=> 'select',
							'name'		=> 'loop',
							'label'		=> $this->language->get( 'entry_loop' ),
							'desc'		=> $this->language->get( 'entry_loop_desc' ),
							'default' 	=> 'false',
							'options'	=> array(
								array(
									'value'	=> 'true',
									'label'	=> 'Enabled'
								),
								array(
									'value'	=> 'false',
									'label'	=> 'Disabled'
								)
							)
						),
						array(
							'type'		=> 'select',
							'name'		=> 'auto_play',
							'label'		=> $this->language->get( 'entry_auto_play' ),
							'default' 	=> 'false',
							'options'	=> array(
								array(
									'value'	=> 'true',
									'label'	=> 'Enabled'
								),
								array(
									'value'	=> 'false',
									'label'	=> 'Disabled'
								)
							)
						),
						array(
							'type'	  => 'number',
							'name'	  => 'auto_play_time',
							'label'	  => $this->language->get( 'entry_auto_play_time' ),
							'default' => 5000
						)
					)
				),
				'style'				=> array(
					'label'			=> $this->language->get( 'entry_styles_text' ),
					'fields'		=> array(
						array(
							'type'	=> 'layout-onion',
							'name'	=> 'layout_onion',
							'label'	=> 'entry_box_text'
						),
						array(
							'type'	=> 'colorpicker',
							'name'	=> 'color',
							'label'	=> 'entry_color_text'
						)
					)
				)
			)
		);
	}

	public function render( $settings = array(), $content = '' ) {
		$this->load->model( 'tool/image' );
		$this->load->model( 'catalog/category' );
		$this->load->model( 'extension/module/pavocategorycarousel' );
		$this->load->language( 'extension/module/pavocategorycarousel' );
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.min.js');

		$settings['banner_subtitle'] = ! empty( $settings ) && ! empty( $settings['banner_subtitle'] ) ? html_entity_decode( htmlspecialchars_decode( $settings['banner_subtitle'] ), ENT_QUOTES, 'UTF-8' ) : '';
		if (isset($settings['category'])) {
		$cat_name = $this->model_catalog_category->getCategory($settings['category']);
		$settings['cat_name'] = isset($cat_name['name']) ? $cat_name['name'] : '';
		$settings['cat_link'] = $this->url->link('product/category', 'path=' . $settings['category']);
		$filter_data = array (
			'start'		  => 0,
			'limit' 	  => isset($settings['limit']) ? $settings['limit'] : 3,
			'category_id' => $settings['category']
		);
		$settings['get_product'] = array ();
		$products = $this->model_extension_module_pavocategorycarousel->getProducts($filter_data);

		if( defined("IMAGE_URL")){
            $server =  IMAGE_URL;
        } else  {
            $server = ($this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER).'image/';
        }

		if ( ! empty( $settings['banner'] ) ) {
			$settings['banner_size'] = strtolower( $settings['banner_size'] );
			$srcs = empty( $settings['banner_size'] ) || $settings['banner_size'] == 'full' ? $server . $settings['banner'] : false;
			if ( strpos( $settings['banner_size'], 'x' ) ) {
				$srcs = $this->getImageLink($settings['banner'], $settings['banner_size']);
			}
			$settings['banner'] = $srcs ? $srcs : $settings['banner'];
		}

		foreach ($products as $pro_id) {
			if ( ! empty( $pro_id['image'] ) ) {
				$settings['product_size'] = strtolower( $settings['product_size'] );
				$src = empty( $settings['product_size'] ) || $settings['product_size'] == 'full' ? $server . $pro_id['image'] : false;
				if ( strpos( $settings['product_size'], 'x' ) ) {
					$srcs = $this->getImageLink($pro_id['image'], $settings['product_size']);
				}

				$pro_id['image'] = $src ? $src : $pro_id['image'];
			}
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($pro_id['price'], $pro_id['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$pro_id['special']) {
				$special = $this->currency->format($this->tax->calculate($pro_id['special'], $pro_id['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$pro_id['special'] ? $pro_id['special'] : $pro_id['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}

			$settings['get_product'][] = array (
				'product_id'  => (int)$pro_id['product_id'],
				'thumb'       => $pro_id['image'],
				'name'        => $pro_id['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($pro_id['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'rating'      => $pro_id['rating'],
				'href'        => $this->url->link('product/product', 'product_id=' . $pro_id['product_id'] )
			);
		}	
		}
		$args = 'extension/module/pavobuilder/pa_category_carousel/pa_category_carousel';
		return $this->load->view( $args, array( 'settings' => $settings, 'content' => $content ) );
	}

}