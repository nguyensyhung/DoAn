<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Image;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(Product::class, 100)->create()->each(function ($product) {
            $product->images()->save(factory(Image::class)->make());
            $product->images()->save(factory(Image::class)->make());
        });*/

         Product::create(['name'        =>  'Áo sơ mi ngắn tay ',
                          'price'       =>  '695000',
                          'description' =>  '- Họa tiết dệt dobby chấm vuông trên nền áo xanh thanh lịch. Kết hợp cổ áo thẳng nhọn cổ điển, chỉn chu và lịch lãm, đồng thời vẫn thoải mái và phóng khoáng nhờ vạt bằng dễ kết hợp trang phục.' ,
                          'content'     =>  '- Chất liệu Modal từ sợi sồi thiên nhiên kết hợp Polyspun và Tencel cho mặt vải mềm mại, nhẹ và thoáng, dễ chịu khi tiếp xúc với da, đồng thời có tính kháng khuẩn nhẹ. Áo mềm mát, đồng thời có độ đứng dáng tự nhiên, hạn chế nhăn co, dễ chăm sóc và bền màu sau thời gian dài sử dụng.',
                          'status'      =>  '1',
                          'category_id' =>  4,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product1.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product2.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Áo sơ mi dài tay ',
                          'price'       =>  '595000',
                          'description' =>  '- Áo sơ mi trắng dài tay phom dáng Slim fit tôn dáng người mặc. Áo có thể sơ vin hoặc thả suông nhờ tà lượn thời trang.' ,
                          'content'     =>  '- Chất liệu Bamboo kết hợp Polyspun cho mặt vải mềm mịn, thoáng mát, ít nhăn co. Sản phẩm thấm hút mồ hôi và thoát ẩm tốt, có tính kháng khuẩn, dễ là ủi và bền màu.',
                          'status'      =>  '1',
                          'category_id' =>  4,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product2.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/produc1.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Áo thun nam Aristino',
                          'price'       =>  '495000',
                          'description' =>  '- Áo Polo phom dáng Slim Fit ôm vừa cơ thể, tôn dáng người mặc.' ,
                          'content'     =>  '- Chất liệu Tencel kết hợp Cool giúp sản phẩm tăng cường tối đa sự mềm mại, thoáng mát và dễ chịu trong thời tiết hè. Sản phẩm có màu sắc nét, ít nhăn co, dễ chăm sóc và bảo quản sau nhiều lần giặt.',
                          'status'      =>  '1',
                          'category_id' =>  5,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product3.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product4.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Áo polo nam Aristino',
                          'price'       =>  '450000',
                          'description' =>  '- Áo Polo phom dáng Regular Fit suông nhẹ, thoải mái và phù hợp với mọi dáng người.' ,
                          'content'     =>  '- Chất liệu Bamboo từ sợi tre thiên nhiên mềm mịn, thấm hút mồ hôi và thoáng mát, thoát ẩm tốt. Kết hợp Polyspun có tính đàn hồi, hạn chế nhăn co, dễ là ủi và bền màu.',
                          'status'      =>  '1',
                          'category_id' =>  5,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product4.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product3.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần tây nam Ari',
                          'price'       =>  '650000',
                          'description' =>  '- Quần âu phom dáng Slim fit ôm vừa phải, tôn dáng người mặc' ,
                          'content'     =>  '- Chất liệu Polyester kết hợp Rayon cho quần có độ cứng cáp và đứng dáng vừa đủ, đồng thời vẫn có bề mặt xốp nhẹ, thoáng mát dễ chịu. ',
                          'status'      =>  '1',
                          'category_id' =>  6,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product5.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product6.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần tây nam ATR',
                          'price'       =>  '750000',
                          'description' =>  '- Các chi tiết được may tỉ mỉ, tinh tế. Gấu chờ, được may vừa vặn với số đo của từng khách hàng. ' ,
                          'content'     =>  '- Chất liệu Polyester kết hợp Rayon cho quần có độ cứng cáp và đứng dáng vừa đủ, đồng thời vẫn có bề mặt xốp nhẹ, thoáng mát dễ chịu. Đặc biệt, quần thấm hút tốt và thoát ẩm vượt trội, mang lại cảm giác dễ chịu suốt ngày dài. ',
                          'status'      =>  '1',
                          'category_id' =>  6,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product10.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product6.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần short nam Ari',
                          'price'       =>  '450000',
                          'description' =>  '- Quần short bermuda thời trang có thiết kế trẻ trung và năng động. Độ dài chấm gối, có thể linh hoạt phối hợp với nhiều trang phục khác nhau trong mùa hè, mang đến cho nam giới diện mạo hiện đại và cuốn hút.' ,
                          'content'     =>  '- Chất liệu cotton từ sợi bông thiên nhiên thuần khiết cho bề mặt dễ chịu khi tiếp xúc với da. Vải xốp nhẹ và thoáng mát, thấm hút mồ hôi tốt, mang đến cảm giác thoải mái trong thời tiết mùa hè.',
                          'status'      =>  '1',
                          'category_id' =>  7,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product3.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product4.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần short nam ASO',
                          'price'       =>  '450000',
                          'description' =>  '- Quần Short phom dáng Regular fit suông nhẹ, tạo cảm giác thoải mái cho người mặc.' ,
                          'content'     =>  '- Chất liệu Cotton từ sợi bông thiên nhiên mềm mại, thoáng mát, xốp nhẹ. Quần có khả năng thấm hút mồ hôi và thoát ẩm tốt, giúp người mặc luôn thoải mái trong mùa hè.',
                          'status'      =>  '1',
                          'category_id' =>  7,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product7.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product8.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Đầm Denim Casual ',
                          'price'       =>  '444000',
                          'description' =>  '- Đầm liền nữ ' ,
                          'content'     =>  '- Chất liệu Cotton từ sợi bông thiên nhiên mềm mại, thoáng mát, xốp nhẹ.',
                          'status'      =>  '1',
                          'category_id' =>  8,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product11.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product21.jpg'
                                ]);
                         });    

         Product::create(['name'        =>  'Đầm liền nữ dài ',
                          'price'       =>  '499000',
                          'description' =>  '- Phom regular dáng sơ mi, cổ tàu,tay lỡ, có cá tay.' ,
                          'content'     =>  '- 100% cotton Giặt Máy Ở Nhiệt Độ Ấm 40°C.Không Sử Dụng Hóa Chất Tẩy Có Chứa Clo.',
                          'status'      =>  '1',
                          'category_id' =>  8,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product12.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product23.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Chân váy jeans ',
                          'price'       =>  '429000',
                          'description' =>  '- Thun umi - phối lưới đính đá ở cổ' ,
                          'content'     =>  '- 100% cotton Giặt Máy Ở Nhiệt Độ Ấm 40°C.Không Sử Dụng Hóa Chất Tẩy Có Chứa Clo.',
                          'status'      =>  '1',
                          'category_id' =>  9,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product12.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product23.jpg'
                                ]);
                         }); 

         Product::create(['name'        =>  'Chân váy chữ bút chì ',
                          'price'       =>  '199000',
                          'description' =>  '- Vitex, mịn, ít nhăn, co giãn nhẹ' ,
                          'content'     =>  '- 100% cotton Giặt Máy Ở Nhiệt Độ Ấm 40°C.Không Sử Dụng Hóa Chất Tẩy Có Chứa Clo.',
                          'status'      =>  '1',
                          'category_id' =>  9,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product23.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product12.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần nỉ Aris Nsh',
                          'price'       =>  '695000',
                          'description' =>  '- Thiết kế basic không kén người mặc, dễ kết hợp với nhiều trang phục theo nhiều phong cách khác nhau' ,
                          'content'     =>  '- Chất liệu 100% CVC cao cấp là sự kết hợp ưu điểm của cotton tự nhiên mềm mại, thoáng mát, xốp nhẹ và độ bền chắc, màu sắc sắc nét của sợi nhân tạo giúp quần đứng dáng tự nhiên, không nhăn và bền màu.',
                          'status'      =>  '1',
                          'category_id' =>  10,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product16.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product17.jpg'
                                ]);
                         });  

         Product::create(['name'        =>  'Quần nỉ Aristino',
                          'price'       =>  '695000',
                          'description' =>  '- Quần có túi xẻ 2 bên, túi xẻ cài khuy và túi phụ tiện lợi.' ,
                          'content'     =>  '- Chất liệu 100% CVC cao cấp là sự kết hợp ưu điểm của cotton tự nhiên mềm mại, thoáng mát, xốp nhẹ và độ bền chắc, màu sắc sắc nét của sợi nhân tạo giúp quần đứng dáng tự nhiên, không nhăn và bền màu.',
                          'status'      =>  '1',
                          'category_id' =>  10,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product17.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product16.jpg'
                                ]);
                         });

         Product::create(['name'        =>  'Quần jeans AKK',
                          'price'       =>  '795000',
                          'description' =>  '- Thiết kế thanh lịch với các chi tiết may tỉ mỉ, chỉn chu và và hiệu ứng vải xước màu tinh tế. ' ,
                          'content'     =>  '- Chất liệu 100% Polyester cho bề mặt trượt dễ chịu, thoáng mát và nhanh khô. Quần có độ đứng dáng tự nhiên, hạn chế nhăn co và luôn giữ được nguyên dáng suốt ngày dài vận động.',
                          'status'      =>  '1',
                          'category_id' =>  11,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product13.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product14.jpg'
                                ]);
                         }); 

         Product::create(['name'        =>  'Quần jeans Aristino',
                          'price'       =>  '895000',
                          'description' =>  '- Thiết kế thanh lịch với các chi tiết may tỉ mỉ. ' ,
                          'content'     =>  '- Chất liệu 100% Polyester cho bề mặt trượt dễ chịu, thoáng mát và nhanh khô. Quần có độ đứng dáng tự nhiên, hạn chế nhăn co và luôn giữ được nguyên dáng suốt ngày dài vận động.',
                          'status'      =>  '1',
                          'category_id' =>  11,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product14.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product14.jpg'
                                ]);
                         }); 

                 Product::create(['name'        =>  'Balo Vands',
                          'price'       =>  '395000',
                          'description' =>  '- Thiết kế thanh lịch với các chi tiết may tỉ mỉ. ' ,
                          'content'     =>  ' được nguyên dáng suốt ngày dài vận động.',
                          'status'      =>  '1',
                          'category_id' =>  13,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product19.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product20.jpg'
                                ]);
                         });  

                         Product::create(['name'        =>  'Balo Adiiasss',
                          'price'       =>  '495000',
                          'description' =>  '- Thiết kế thanh lịch với các chi tiết may tỉ mỉ. ' ,
                          'content'     =>  '- Chất liệu 100% Polyester ',
                          'status'      =>  '1',
                          'category_id' =>  13,
                         ])->each(function ($product) {
                                $product->images()->create([
                                  'name'  => 'sadsad',
                                  'path' => '/storage/product20.jpg'
                              ]);
                                $product->images()->create([
                                  'name'  => 'sadssssad',
                                  'path' => '/storage/product19.jpg'
                                ]);
                         });                                          
    }
}
