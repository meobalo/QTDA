<?php
    $baseURL ='';
    require_once ($baseUrl.'./utils/ulitity.php');
    require_once ($baseUrl.'./database/dbhelper.php');
    $sql = "SELECT * FROM product WHERE category_id=40 order by updated_at desc limit 0,3";
    $data = executeResult($sql);
?>
<div class="footer">
    <div class="footer-1">
        <div class="grid wide footer-items">
            <div class="row">
                <div class="col l-3">
                    <span class="footer-title">LNH-ĐH Điện Lực</span>
                    <div class="footer-gioithieu">
                    </div>
                </div>
                
                <div class="col l-3">
                    <span class="footer-title">SẢN PHẤM GIÁ CAO</span>
                    <div class="rate-height">
                    <?php
                    foreach($data as $item) {
                            echo '
                            <div class="rate-height-items">
                                <div class="rate-height-box-img">
                                <a class="tag-a" href="'.$baseUrl.'category/sanpham/sp.php?sp='.$item['id'].'">
                                    <img style="width: 70;height: 70px;object-fit: cover;" class="product-selling-img" src="'.$baseUrl.fixUrl($item['thumnail'],$roothPath="./").'" alt="">
                                </a>
                                </div>
                                <div class="rate-height-right">
                                    <span>'.$item['title'].'</span>
                                    <span class="rate-height-price">'.number_format( $item['discount']).'<sup>đ</sup></span>
                                </div>
                            </div>
                            ';
                        }
                    ?>
                    </div>
                </div>
                <div class="col l-3">
                    <span class="footer-title">THÔNG TIN VÀ HƯỚNG DẪN</span>
                    <a href="<?=$baseUrl.'FE/giaohang'?>" class="tag-a"><div class="footer-inform">Giao hàng và thanh toán</div></a>
                    <a href="<?=$baseUrl.'FE/baohanh'?>" class="tag-a"><div class="footer-inform">Chế độ bảo hành</div></a>
                    <a href="<?=$baseUrl.'FE/nhanvadoi'?>" class="tag-a"><div class="footer-inform">Nhận hàng và đổi trả</div></a>
                    <a href="<?=$baseUrl.'FE/daphop'?>" class="tag-a"><div class="footer-inform">Đập hộp và nhận quà</div></a>
                    <a href="<?=$baseUrl.'FE/baomat'?>" class="tag-a"><div class="footer-inform-last">Chính sách bảo mật</div></a>
                </div>
                <div class="col l-3">
                    <span class="footer-title">ĐỊA CHỈ CỬA HÀNG</span>
                    <div class="footer-address">235 Hoàng Quốc Việt, Bắc Từ Liêm, Hà Nội</div>
                    <div class="footer-address">Đinh Duy Long</div>
                    <div class="footer-address">Nguyễn Minh Nhật</div>
                    <div class="footer-address">Đỗ Minh Hoàn</div>
                </div>
            </div>
            
        </div>
        <div class="footer-end">
            <span>Copyright 2022 © Bản quyến thuộc về LNH</span>
        </div>
    </div>
</div>