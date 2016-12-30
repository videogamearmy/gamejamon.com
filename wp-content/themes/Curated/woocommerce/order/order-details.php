<?php
/**
 * Order details
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$order = wc_get_order( $order_id );
?>

<div id="woo-order-details" class="woo-element">
	<h2 class="woo-center"><?php _e( 'Order Details', MAHA_TEXT_DOMAIN ); ?></h2>
	<table class="shop_table order_details maha-table">
		<thead>
			<tr>
				<th class="product-name"><?php _e( 'Product', MAHA_TEXT_DOMAIN ); ?></th>
				<th class="product-total"><?php _e( 'Total', MAHA_TEXT_DOMAIN ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach( $order->get_items() as $item_id => $item ) {
					wc_get_template( 'order/order-details-item.php', array(
						'order'   => $order,
						'item_id' => $item_id,
						'item'    => $item,
						'product' => apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item )
					) );
				}
			?>
			<?php do_action( 'woocommerce_order_items_table', $order ); ?>
		</tbody>
		<tfoot>
			<?php
				foreach ( $order->get_order_item_totals() as $key => $total ) {
					?>
					<tr>
						<th scope="row"><?php echo $total['label']; ?></th>
						<td><?php echo $total['value']; ?></td>
					</tr>
					<?php
				}
			?>
		</tfoot>
	</table>
</div>
<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<?php wc_get_template( 'order/order-details-customer.php', array( 'order' =>  $order ) ); ?>

<div class="clear"></div>
