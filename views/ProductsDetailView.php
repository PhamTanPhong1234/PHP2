<?php
//load LayoutTrangChu.php
$this->layoutPath = "LayoutProduct.php";
?>
<style type="text/css">
  .img-responsive {
    max-width: 100%;
    height: auto;
    object-fit: cover;
  }
</style>
<div class="top">
  <div class="row">
    <div class="col-xs-12 col-md-6 product-image">
      <div class="featured-image">
        <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width:300px;" class="img-responsive" />
      </div>
      <style type="text/css">
        .box-image ul {
          padding: 0px;
          margin: 0px;
          list-style: none;
        }

        .box-image ul li {
          display: inline;
          margin-right: 10px;
          ;
        }

        .box-image img {
          width: 50px;
          border: 1px solid #dddddd;
          margin-bottom: 10px;
          cursor: pointer;
        }
      </style>
    </div>
    <div class="col-xs-12 col-md-6 info">
      <h1 itemprop="name"><?php echo $record->name; ?></h1>
      <p class="vendor"> Category:&nbsp; <span> <?php echo $this->getCategory($record->category_id); ?> </span></p>
      <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span></p>
      <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($record->price - ($record->price * $record->discount) / 100); ?>₫ </span></span></p>
      </p>
      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-primary">Cho vào giỏ hàng</a>
      <!-- rating -->
      <div style="border:1px solid #dddddd; margin-top: 15px;">
        <h4 style="padding-left: 10px;">Rating</h4>
        <table style="width: 100%;">
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-primary"><?php echo $this->getStar($record->id, 1); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-warning"><?php echo $this->getStar($record->id, 2); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-danger"><?php echo $this->getStar($record->id, 3); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-info"><?php echo $this->getStar($record->id, 4); ?> vote</span></td>
          </tr>
          <tr>
            <td style="width: 80%; padding-left: 10px;"><img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"> <img src="assets/frontend/images/star.jpg"></td>
            <td><span class="label label-success"><?php echo $this->getStar($record->id, 5); ?> vote</span></td>
          </tr>
        </table>
        <br>
      </div>
      <!-- /rating -->
    </div>
  </div>
  <div class="middle" style="padding-top: 20px;">
    <?php echo $record->description; ?>
    <?php echo $record->content; ?>
  </div>