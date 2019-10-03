<?php
use App\District;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Hồ Chí Minh
        District::create(['name' => 'Quận 1', 'city_id' => 1]);
        District::create(['name' => 'Quận 2', 'city_id' => 1]);
        District::create(['name' => 'Quận 3', 'city_id' => 1]);
        District::create(['name' => 'Quận 4', 'city_id' => 1]);
        District::create(['name' => 'Quận 5', 'city_id' => 1]);
        District::create(['name' => 'Quận 6', 'city_id' => 1]);
        District::create(['name' => 'Quận 7', 'city_id' => 1]);
        District::create(['name' => 'Quận 8', 'city_id' => 1]);
        District::create(['name' => 'Quận 9', 'city_id' => 1]);
        District::create(['name' => 'Quận 10', 'city_id' => 1]);
        District::create(['name' => 'Quận 11', 'city_id' => 1]);
        District::create(['name' => 'Quận 12', 'city_id' => 1]);
        District::create(['name' => 'Quận Gò Vấp', 'city_id' => 1]);
        District::create(['name' => 'Quận Tân Bình', 'city_id' => 1]);
        District::create(['name' => 'Quận Tân Phú', 'city_id' => 1]);
        District::create(['name' => 'Quận Bình Thạnh', 'city_id' => 1]);
        District::create(['name' => 'Quận Phú Nhuận', 'city_id' => 1]);
        District::create(['name' => 'Quận Thủ Đức', 'city_id' => 1]);
        District::create(['name' => 'Quận Bình Tân', 'city_id' => 1]);
        District::create(['name' => 'Huyện Bình Chánh', 'city_id' => 1]);
        District::create(['name' => 'Huyện Củ Chi', 'city_id' => 1]);
        District::create(['name' => 'Huyện Hóc Môn', 'city_id' => 1]);
        District::create(['name' => 'Huyện Nhà Bè', 'city_id' => 1]);
        District::create(['name' => 'Huyện Cần Giờ', 'city_id' => 1]);

        //Hải Phòng
        District::create(['name' => 'Quận Hồng Bàng', 'city_id' => 2]);
        District::create(['name' => 'Quận Lê Chân', 'city_id' => 2]);
        District::create(['name' => 'Quận Ngô Quyền', 'city_id' => 2]);
        District::create(['name' => 'Quận Kiến An', 'city_id' => 2]);
        District::create(['name' => 'Quận Hải An', 'city_id' => 2]);
        District::create(['name' => 'Quận Đồ Sơn', 'city_id' => 2]);
        District::create(['name' => 'Quận Dương Kinh', 'city_id' => 2]);
        District::create(['name' => 'Huyện An Lão', 'city_id' => 2]);
        District::create(['name' => 'Huyện Thủy Nguyên', 'city_id' => 2]);
        District::create(['name' => 'Huyện An Dương', 'city_id' => 2]);
        District::create(['name' => 'Huyện Tiên Lãng', 'city_id' => 2]);
        District::create(['name' => 'Huyện Vĩnh Bảo', 'city_id' => 2]);
        District::create(['name' => 'Huyện Cát Hải', 'city_id' => 2]);
        District::create(['name' => 'Huyện Bạch Long Vĩ', 'city_id' => 2]);

        //Hà Nội
        District::create(['name' => 'Quận Ba Đình', 'city_id' => 3]);
        District::create(['name' => 'Quận Hoàn Kiếm', 'city_id' => 3]);
        District::create(['name' => 'Quận Hai Bà Trưng', 'city_id' => 3]);
        District::create(['name' => 'Quận Đống Đa', 'city_id' => 3]);
        District::create(['name' => 'Quận Tây Hồ', 'city_id' => 3]);
        District::create(['name' => 'Quận Cầu Giấy', 'city_id' => 3]);
        District::create(['name' => 'Quận Thanh Xuân', 'city_id' => 3]);
        District::create(['name' => 'Quận Hoàng Mai', 'city_id' => 3]);
        District::create(['name' => 'Quận Long Biên', 'city_id' => 3]);
        District::create(['name' => 'Quận Hà Đông', 'city_id' => 3]);
        District::create(['name' => 'Huyện Thanh Trì', 'city_id' => 3]);
        District::create(['name' => 'Huyện Gia Lâm', 'city_id' => 3]);
        District::create(['name' => 'Huyện Đông Anh', 'city_id' => 3]);
        District::create(['name' => 'Huyện Sóc Sơn', 'city_id' => 3]);
        District::create(['name' => 'Huyện Ba Vì', 'city_id' => 3]);
        District::create(['name' => 'Huyện Phúc Thọ', 'city_id' => 3]);
        District::create(['name' => 'Huyện Thạch Thất', 'city_id' => 3]);
        District::create(['name' => 'Huyện Quốc Oai', 'city_id' => 3]);
        District::create(['name' => 'Huyện Chương Mỹ', 'city_id' => 3]);
        District::create(['name' => 'Huyện Đan Phượng', 'city_id' => 3]);
        District::create(['name' => 'Huyện Hoài Đức', 'city_id' => 3]);
        District::create(['name' => 'Huyện Thanh Oai', 'city_id' => 3]);
        District::create(['name' => 'Huyện Mỹ Đức', 'city_id' => 3]);
        District::create(['name' => 'Huyện Ứng Hòa', 'city_id' => 3]);
        District::create(['name' => 'Huyện Thường Tín', 'city_id' => 3]);
        District::create(['name' => 'Huyện Phú Xuyên', 'city_id' => 3]);
        District::create(['name' => 'Huyện Mê Linh', 'city_id' => 3]);
        District::create(['name' => 'Thị Xã Sơn Tây', 'city_id' => 3]);
        District::create(['name' => 'Quận Nam Từ Liêm', 'city_id' => 3]);
        District::create(['name' => 'Quận Bắc Từ Liêm', 'city_id' => 3]);

        //Đà Nẵng
        District::create(['name' => 'Quận Hải Châu', 'city_id' => 4]);
        District::create(['name' => 'Quận Thanh Khê', 'city_id' => 4]);
        District::create(['name' => 'Quận Sơn Trà', 'city_id' => 4]);
        District::create(['name' => 'Quận Ngũ Hành Sơn', 'city_id' => 4]);
        District::create(['name' => 'Quận Liên Chiểu', 'city_id' => 4]);
        District::create(['name' => 'Quận Cẩm Lệ', 'city_id' => 4]);
        District::create(['name' => 'Huyện Hòa Vang', 'city_id' => 4]);

        //Hưng Yên
        District::create(['name' => 'Huyện Kim Động', 'city_id' => 5]);
        District::create(['name' => 'Huyện Ân Thi', 'city_id' => 5]);
        District::create(['name' => 'Huyện Khoái Châu', 'city_id' => 5]);
        District::create(['name' => 'Huyện Yên Mỹ', 'city_id' => 5]);
        District::create(['name' => 'Huyện Tiên Lữ', 'city_id' => 5]);
        District::create(['name' => 'Huyện Phù Cừ', 'city_id' => 5]);
        District::create(['name' => 'Huyện Mỹ Hào', 'city_id' => 5]);
        District::create(['name' => 'Huyện Văn Lâm', 'city_id' => 5]);
        District::create(['name' => 'Huyện Văn Giang', 'city_id' => 5]);
        District::create(['name' => 'Thị Xã Hưng Yên', 'city_id' => 5]);

        //Hải Dương
        District::create(['name' => 'Thành phố Hải Dương', 'city_id' => 6]);
        District::create(['name' => 'Huyện Chí Linh', 'city_id' => 6]);
        District::create(['name' => 'Huyện Nam Sách', 'city_id' => 6]);
        District::create(['name' => 'Huyện Kinh Môn', 'city_id' => 6]);
        District::create(['name' => 'Huyện Gia Lộc', 'city_id' => 6]);
        District::create(['name' => 'Huyện Tứ Kỳ', 'city_id' => 6]);
        District::create(['name' => 'Huyện Thanh Miện', 'city_id' => 6]);
        District::create(['name' => 'Huyện Ninh Giang', 'city_id' => 6]);
        District::create(['name' => 'Huyện Cẩm Giàng', 'city_id' => 6]);
        District::create(['name' => 'Huyện Thanh Hà', 'city_id' => 6]);
        District::create(['name' => 'Huyện Kim Thành', 'city_id' => 6]);
        District::create(['name' => 'Huyện Bình Giang', 'city_id' => 6]);

        //Quảng Ninh
        District::create(['name' => 'Thành phố Hạ Long', 'city_id' => 7]);
        District::create(['name' => 'Thành phố Cẩm Phả', 'city_id' => 7]);
        District::create(['name' => 'Thành phố Uông Bí', 'city_id' => 7]);
        District::create(['name' => 'Thị Xã Móng Cái', 'city_id' => 7]);
        District::create(['name' => 'Huyện Bình Liêu', 'city_id' => 7]);
        District::create(['name' => 'Huyện Đầm Hà', 'city_id' => 7]);
        District::create(['name' => 'Huyện Hải Hà', 'city_id' => 7]);
        District::create(['name' => 'Huyện Tiên Yên', 'city_id' => 7]);
        District::create(['name' => 'Huyện Ba Chẽ', 'city_id' => 7]);
        District::create(['name' => 'Huyện Đông Triều', 'city_id' => 7]);
        District::create(['name' => 'Huyện Yên Hưng', 'city_id' => 7]);
        District::create(['name' => 'Huyện Hoành Bồ', 'city_id' => 7]);
        District::create(['name' => 'Huyện Vân Đồn', 'city_id' => 7]);
        District::create(['name' => 'Huyện Cô Tô', 'city_id' => 7]);
        District::create(['name' => 'Thị Xã Quảng Yên', 'city_id' => 7]);

        //Bắc Ninh
        District::create(['name' => 'Thành phố Bắc Ninh', 'city_id' => 8]);
        District::create(['name' => 'Huyện Yên Phong', 'city_id' => 8]);
        District::create(['name' => 'Huyện Quế Võ', 'city_id' => 8]);
        District::create(['name' => 'Huyện Tiên Du', 'city_id' => 8]);
        District::create(['name' => 'Huyện Từ Sơn', 'city_id' => 8]);
        District::create(['name' => 'Huyện Thuận Thành', 'city_id' => 8]);
        District::create(['name' => 'Huyện Gia Bình', 'city_id' => 8]);
        District::create(['name' => 'Huyện Lương Tài', 'city_id' => 8]);

        //Bắc Giang
        District::create(['name' => 'Thành phố Bắc Giang', 'city_id' => 9]);
        District::create(['name' => 'Huyện Yên Thế', 'city_id' => 9]);
        District::create(['name' => 'Huyện Lục Ngạn', 'city_id' => 9]);
        District::create(['name' => 'Huyện Sơn Động', 'city_id' => 9]);
        District::create(['name' => 'Huyện Lục Nam', 'city_id' => 9]);
        District::create(['name' => 'Huyện Tân Yên', 'city_id' => 9]);
        District::create(['name' => 'Huyện Hiệp Hòa', 'city_id' => 9]);
        District::create(['name' => 'Huyện Lạng Giang', 'city_id' => 9]);
        District::create(['name' => 'Huyện Việt Yên', 'city_id' => 9]);
        District::create(['name' => 'Huyện Yên Dũng', 'city_id' => 9]);

        //Lạng Sơn
        District::create(['name' => 'Thành phố Lạng Sơn', 'city_id' => 10]);
        District::create(['name' => 'Huyện Tràng Định', 'city_id' => 10]);
        District::create(['name' => 'Huyện Bình Gia', 'city_id' => 10]);
        District::create(['name' => 'Huyện Văn Lãng', 'city_id' => 10]);
        District::create(['name' => 'Huyện Bắc Sơn', 'city_id' => 10]);
        District::create(['name' => 'Huyện Văn Quan', 'city_id' => 10]);
        District::create(['name' => 'Huyện Cao Lộc', 'city_id' => 10]);
        District::create(['name' => 'Huyện Lộc Bình', 'city_id' => 10]);
        District::create(['name' => 'Huyện Chi Lăng', 'city_id' => 10]);
        District::create(['name' => 'Huyện Đình Lập', 'city_id' => 10]);
        District::create(['name' => 'Huyện Hữu Lũng', 'city_id' => 10]);

        //Thái Nguyên
        District::create(['name' => 'Thành phố Thái Nguyên', 'city_id' => 11]);
        District::create(['name' => 'Thị Xã Sông Công', 'city_id' => 11]);
        District::create(['name' => 'Huyện Định Hóa', 'city_id' => 11]);
        District::create(['name' => 'Huyện Võ Nhai', 'city_id' => 11]);
        District::create(['name' => 'Huyện Đại Từ', 'city_id' => 11]);
        District::create(['name' => 'Huyện Đồng Hỷ', 'city_id' => 11]);
        District::create(['name' => 'Huyện Phú Bình', 'city_id' => 11]);
        District::create(['name' => 'Huyện Phổ Yên', 'city_id' => 11]);

        //Bắc Kạn
        District::create(['name' => 'Thị Xã Bắc Kạn', 'city_id' => 12]);
        District::create(['name' => 'Huyện Chợ Đồn', 'city_id' => 12]);
        District::create(['name' => 'Huyện Bạch Thông', 'city_id' => 12]);
        District::create(['name' => 'Huyện Na Rì', 'city_id' => 12]);
        District::create(['name' => 'Huyện Ngân Sơn', 'city_id' => 12]);
        District::create(['name' => 'Huyện Ba Bể', 'city_id' => 12]);
        District::create(['name' => 'Huyện Chợ Mới', 'city_id' => 12]);
        District::create(['name' => 'Huyện Pác Nặm', 'city_id' => 12]);

        //Cao Bằng
        District::create(['name' => 'Thị Xã Cao Bằng', 'city_id' => 13]);
        District::create(['name' => 'Huyện Bảo Lạc', 'city_id' => 13]);
        District::create(['name' => 'Huyện Thông Nông', 'city_id' => 13]);
        District::create(['name' => 'Huyện Hà Quảng', 'city_id' => 13]);
        District::create(['name' => 'Huyện Trà Lĩnh', 'city_id' => 13]);
        District::create(['name' => 'Huyện Trùng Khánh', 'city_id' => 13]);
        District::create(['name' => 'Huyện Nguyên Bình', 'city_id' => 13]);
        District::create(['name' => 'Huyện Hòa An', 'city_id' => 13]);
        District::create(['name' => 'Huyện Quảng Uyên', 'city_id' => 13]);
        District::create(['name' => 'Huyện Thạch An', 'city_id' => 13]);
        District::create(['name' => 'Huyện Hạ Lang', 'city_id' => 13]);
        District::create(['name' => 'Huyện Bảo Lâm', 'city_id' => 13]);
        District::create(['name' => 'Huyện Phục Hòa', 'city_id' => 13]);

        //Vĩnh Phúc
        District::create(['name' => 'Thành phố Vĩnh Yên', 'city_id' => 14]);
        District::create(['name' => 'Thị xã Phúc Yên', 'city_id' => 14]);
        District::create(['name' => 'Huyện Lập Thạch', 'city_id' => 14]);
        District::create(['name' => 'Huyện Tam Dương', 'city_id' => 14]);
        District::create(['name' => 'Huyện Tam Đảo', 'city_id' => 14]);
        District::create(['name' => 'Huyện Bình Xuyên', 'city_id' => 14]);
        District::create(['name' => 'Huyện Yên Lạc', 'city_id' => 14]);
        District::create(['name' => 'Huyện Vĩnh Tường', 'city_id' => 14]);
        District::create(['name' => 'Huyện Sông Lô', 'city_id' => 14]);

        //Phú Thọ
        District::create(['name' => 'Thành phố Việt Trì', 'city_id' => 15]);
        District::create(['name' => 'Thị xã Phú Thọ', 'city_id' => 15]);
        District::create(['name' => 'Huyện Đoan Hùng', 'city_id' => 15]);
        District::create(['name' => 'Huyện Hạ Hoà', 'city_id' => 15]);
        District::create(['name' => 'Huyện Thanh Ba', 'city_id' => 15]);
        District::create(['name' => 'Huyện Phù Ninh', 'city_id' => 15]);
        District::create(['name' => 'Huyện Yên Lập', 'city_id' => 15]);
        District::create(['name' => 'Huyện Cẩm Khê', 'city_id' => 15]);
        District::create(['name' => 'Huyện Tam Nông', 'city_id' => 15]);
        District::create(['name' => 'Huyện Lâm Thao', 'city_id' => 15]);
        District::create(['name' => 'Huyện Thanh Sơn', 'city_id' => 15]);
        District::create(['name' => 'Huyện Thanh Thuỷ', 'city_id' => 15]);
        District::create(['name' => 'Huyện Tân Sơn', 'city_id' => 15]);

        //Tuyên Quang
        District::create(['name' => 'Thành phố Tuyên Quang', 'city_id' => 16]);
        District::create(['name' => 'Huyện Lâm Bình', 'city_id' => 16]);
        District::create(['name' => 'Huyện Na Hang', 'city_id' => 16]);
        District::create(['name' => 'Huyện Chiêm Hóa', 'city_id' => 16]);
        District::create(['name' => 'Huyện Hàm Yên', 'city_id' => 16]);
        District::create(['name' => 'Huyện Yên Sơn', 'city_id' => 16]);
        District::create(['name' => 'Huyện Sơn Dương', 'city_id' => 16]);

        //Hà Giang
        District::create(['name' => 'Thành phố Hà Giang', 'city_id' => 17]);
        District::create(['name' => 'Huyện Đồng Văn', 'city_id' => 17]);
        District::create(['name' => 'Huyện Mèo Vạc', 'city_id' => 17]);
        District::create(['name' => 'Huyện Yên Minh', 'city_id' => 17]);
        District::create(['name' => 'Huyện Quản Bạ', 'city_id' => 17]);
        District::create(['name' => 'Huyện Vị Xuyên', 'city_id' => 17]);
        District::create(['name' => 'Huyện Bắc Mê', 'city_id' => 17]);
        District::create(['name' => 'Huyện Hoàng Su Phì', 'city_id' => 17]);
        District::create(['name' => 'Huyện Xín Mần', 'city_id' => 17]);
        District::create(['name' => 'Huyện Bắc Quang', 'city_id' => 17]);
        District::create(['name' => 'Huyện Quang Bình', 'city_id' => 17]);

        //Yên Bái
        District::create(['name' => 'Thành phố Yên Bái', 'city_id' => 18]);
        District::create(['name' => 'Thị xã Nghĩa Lộ', 'city_id' => 18]);
        District::create(['name' => 'Huyện Lục Yên', 'city_id' => 18]);
        District::create(['name' => 'Huyện Văn Yên', 'city_id' => 18]);
        District::create(['name' => 'Huyện Mù Căng Chải', 'city_id' => 18]);
        District::create(['name' => 'Huyện Trấn Yên', 'city_id' => 18]);
        District::create(['name' => 'Huyện Trạm Tấu', 'city_id' => 18]);
        District::create(['name' => 'Huyện Văn Chấn', 'city_id' => 18]);
        District::create(['name' => 'Huyện Yên Bình', 'city_id' => 18]);

        //Lào Cai
        District::create(['name' => 'Thành phố Lào Cai', 'city_id' => 19]);
        District::create(['name' => 'Huyện Bát Xát', 'city_id' => 19]);
        District::create(['name' => 'Huyện Mường Khương', 'city_id' => 19]);
        District::create(['name' => 'Huyện Si Ma Cai', 'city_id' => 19]);
        District::create(['name' => 'Huyện Bắc Hà', 'city_id' => 19]);
        District::create(['name' => 'Huyện Bảo Thắng', 'city_id' => 19]);
        District::create(['name' => 'Huyện Bảo Yên', 'city_id' => 19]);
        District::create(['name' => 'Huyện Sa Pa', 'city_id' => 19]);
        District::create(['name' => 'Huyện Văn Bàn', 'city_id' => 19]);

        //Hòa Bình
        District::create(['name' => 'Thành phố Hòa Bình', 'city_id' => 20]);
        District::create(['name' => 'Huyện Đà Bắc', 'city_id' => 20]);
        District::create(['name' => 'Huyện Kỳ Sơn', 'city_id' => 20]);
        District::create(['name' => 'Huyện Lương Sơn', 'city_id' => 20]);
        District::create(['name' => 'Huyện Kim Bôi', 'city_id' => 20]);
        District::create(['name' => 'Huyện Cao Phong', 'city_id' => 20]);
        District::create(['name' => 'Huyện Tân Lạc', 'city_id' => 20]);
        District::create(['name' => 'Huyện Mai Châu', 'city_id' => 20]);
        District::create(['name' => 'Huyện Lạc Sơn', 'city_id' => 20]);
        District::create(['name' => 'Huyện Yên Thủy', 'city_id' => 20]);
        District::create(['name' => 'Huyện Lạc Thủy', 'city_id' => 20]);

        //Sơn La
        District::create(['name' => 'Thành phố Sơn La', 'city_id' => 21]);
        District::create(['name' => 'Huyện Quỳnh Nhai', 'city_id' => 21]);
        District::create(['name' => 'Huyện Thuận Châu', 'city_id' => 21]);
        District::create(['name' => 'Huyện Mường La', 'city_id' => 21]);
        District::create(['name' => 'Huyện Bắc Yên', 'city_id' => 21]);
        District::create(['name' => 'Huyện Phù Yên', 'city_id' => 21]);
        District::create(['name' => 'Huyện Mộc Châu', 'city_id' => 21]);
        District::create(['name' => 'Huyện Yên Châu', 'city_id' => 21]);
        District::create(['name' => 'Huyện Mai Sơn', 'city_id' => 21]);
        District::create(['name' => 'Huyện Sông Mã', 'city_id' => 21]);
        District::create(['name' => 'Huyện Sốp Cộp', 'city_id' => 21]);
        District::create(['name' => 'Huyện Vân Hồ', 'city_id' => 21]);

        //Điện Biên
        District::create(['name' => 'Thành phố Điện Biên Phủ', 'city_id' => 22]);
        District::create(['name' => 'Thị Xã Mường Lay', 'city_id' => 22]);
        District::create(['name' => 'Huyện Mường Nhé', 'city_id' => 22]);
        District::create(['name' => 'Huyện Mường Chà', 'city_id' => 22]);
        District::create(['name' => 'Huyện Tủa Chùa', 'city_id' => 22]);
        District::create(['name' => 'Huyện Tuần Giáo', 'city_id' => 22]);
        District::create(['name' => 'Huyện Điện Biên', 'city_id' => 22]);
        District::create(['name' => 'Huyện Điện Biên Đông', 'city_id' => 22]);
        District::create(['name' => 'Huyện Mường Ảng', 'city_id' => 22]);
        District::create(['name' => 'Huyện Nậm Pồ', 'city_id' => 22]);

        //Lai Châu
        District::create(['name' => 'Thành phố Lai Châu', 'city_id' => 23]);
        District::create(['name' => 'Huyện Tam Đường', 'city_id' => 23]);
        District::create(['name' => 'Huyện Mường Tè', 'city_id' => 23]);
        District::create(['name' => 'Huyện Sìn Hồ', 'city_id' => 23]);
        District::create(['name' => 'Huyện Phong Thổ', 'city_id' => 23]);
        District::create(['name' => 'Huyện Than Uyên', 'city_id' => 23]);
        District::create(['name' => 'Huyện Tân Uyên', 'city_id' => 23]);
        District::create(['name' => 'Huyện Nậm Nhùn', 'city_id' => 23]);

        //Hà Nam
        District::create(['name' => 'Thành phố Phủ Lý', 'city_id' => 24]);
        District::create(['name' => 'Huyện Duy Tiên', 'city_id' => 24]);
        District::create(['name' => 'Huyện Kim Bảng', 'city_id' => 24]);
        District::create(['name' => 'Huyện Thanh Liêm', 'city_id' => 24]);
        District::create(['name' => 'Huyện Bình Lục', 'city_id' => 24]);
        District::create(['name' => 'Huyện Lý Nhân', 'city_id' => 24]);

        //Thái Bình
        District::create(['name' => 'Thành phố Thái Bình', 'city_id' => 25]);
        District::create(['name' => 'Huyện Quỳnh Phụ', 'city_id' => 25]);
        District::create(['name' => 'Huyện Hưng Hà', 'city_id' => 25]);
        District::create(['name' => 'Huyện Đông Hưng', 'city_id' => 25]);
        District::create(['name' => 'Huyện Thái Thụy', 'city_id' => 25]);
        District::create(['name' => 'Huyện Tiền Hải', 'city_id' => 25]);
        District::create(['name' => 'Huyện Kiến Xương', 'city_id' => 25]);
        District::create(['name' => 'Huyện Vũ Thư', 'city_id' => 25]);

        //Nam Định
        District::create(['name' => 'Thành phố Nam Định', 'city_id' => 26]);
        District::create(['name' => 'Huyện Mỹ Lộc', 'city_id' => 26]);
        District::create(['name' => 'Huyện Vụ Bản', 'city_id' => 26]);
        District::create(['name' => 'Huyện Ý Yên', 'city_id' => 26]);
        District::create(['name' => 'Huyện Nghĩa Hưng', 'city_id' => 26]);
        District::create(['name' => 'Huyện Nam Trực', 'city_id' => 26]);
        District::create(['name' => 'Huyện Trực Ninh', 'city_id' => 26]);
        District::create(['name' => 'Huyện Xuân Trường', 'city_id' => 26]);
        District::create(['name' => 'Huyện Giao Thủy', 'city_id' => 26]);
        District::create(['name' => 'Huyện Hải Hậu', 'city_id' => 26]);

        //Ninh Bình
        District::create(['name' => 'Thành phố Ninh Bình', 'city_id' => 27]);
        District::create(['name' => 'Thành phố Tam Điệp', 'city_id' => 27]);
        District::create(['name' => 'Huyện Nho Quan', 'city_id' => 27]);
        District::create(['name' => 'Huyện Gia Viễn', 'city_id' => 27]);
        District::create(['name' => 'Huyện Hoa Lư', 'city_id' => 27]);
        District::create(['name' => 'Huyện Yên Khánh', 'city_id' => 27]);
        District::create(['name' => 'Huyện Kim Sơn', 'city_id' => 27]);
        District::create(['name' => 'Huyện Yên Mô', 'city_id' => 27]);

        //Thanh Hóa
        District::create(['name' => 'Thành phố Thanh Hóa', 'city_id' => 28]);
        District::create(['name' => 'Thị xã Bỉm Sơn', 'city_id' => 28]);
        District::create(['name' => 'Thành phố Sầm Sơn', 'city_id' => 28]);
        District::create(['name' => 'Huyện Mường Lát', 'city_id' => 28]);
        District::create(['name' => 'Huyện Quan Hóa', 'city_id' => 28]);
        District::create(['name' => 'Huyện Bá Thước', 'city_id' => 28]);
        District::create(['name' => 'Huyện Quan Sơn', 'city_id' => 28]);
        District::create(['name' => 'Huyện Lang Chánh', 'city_id' => 28]);
        District::create(['name' => 'Huyện Ngọc Lặc', 'city_id' => 28]);
        District::create(['name' => 'Huyện Cẩm Thủy', 'city_id' => 28]);
        District::create(['name' => 'Huyện Thạch Thành', 'city_id' => 28]);
        District::create(['name' => 'Huyện Hà Trung', 'city_id' => 28]);
        District::create(['name' => 'Huyện Vĩnh Lộc', 'city_id' => 28]);
        District::create(['name' => 'Huyện Yên Định', 'city_id' => 28]);
        District::create(['name' => 'Huyện Thọ Xuân', 'city_id' => 28]);
        District::create(['name' => 'Huyện Thường Xuân', 'city_id' => 28]);
        District::create(['name' => 'Huyện Triệu Sơn', 'city_id' => 28]);
        District::create(['name' => 'Huyện Thiệu Hóa', 'city_id' => 28]);
        District::create(['name' => 'Huyện Hoằng Hóa', 'city_id' => 28]);
        District::create(['name' => 'Huyện Hậu Lộc', 'city_id' => 28]);
        District::create(['name' => 'Huyện Nga Sơn', 'city_id' => 28]);
        District::create(['name' => 'Huyện Như Xuân', 'city_id' => 28]);
        District::create(['name' => 'Huyện Như Thanh', 'city_id' => 28]);
        District::create(['name' => 'Huyện Nông Cống', 'city_id' => 28]);
        District::create(['name' => 'Huyện Đông Sơn', 'city_id' => 28]);
        District::create(['name' => 'Huyện Quảng Xương', 'city_id' => 28]);
        District::create(['name' => 'Huyện Tĩnh Gia', 'city_id' => 28]);

        //Nghệ An
        District::create(['name' => 'Thành phố Vinh', 'city_id' => 29]);
        District::create(['name' => 'Thị xã Cửa Lò', 'city_id' => 29]);
        District::create(['name' => 'Thị xã Thái Hoà', 'city_id' => 29]);
        District::create(['name' => 'Huyện Quế Phong', 'city_id' => 29]);
        District::create(['name' => 'Huyện Quỳ Châu', 'city_id' => 29]);
        District::create(['name' => 'Huyện Kỳ Sơn', 'city_id' => 29]);
        District::create(['name' => 'Huyện Tương Dương', 'city_id' => 29]);
        District::create(['name' => 'Huyện Nghĩa Đàn', 'city_id' => 29]);
        District::create(['name' => 'Huyện Quỳ Hợp', 'city_id' => 29]);
        District::create(['name' => 'Huyện Quỳnh Lưu', 'city_id' => 29]);
        District::create(['name' => 'Huyện Con Cuông', 'city_id' => 29]);
        District::create(['name' => 'Huyện Tân Kỳ', 'city_id' => 29]);
        District::create(['name' => 'Huyện Anh Sơn', 'city_id' => 29]);
        District::create(['name' => 'Huyện Diễn Châu', 'city_id' => 29]);
        District::create(['name' => 'Huyện Yên Thành', 'city_id' => 29]);
        District::create(['name' => 'Huyện Đô Lương', 'city_id' => 29]);
        District::create(['name' => 'Huyện Thanh Chương', 'city_id' => 29]);
        District::create(['name' => 'Huyện Nghi Lộc', 'city_id' => 29]);
        District::create(['name' => 'Huyện Nam Đàn', 'city_id' => 29]);
        District::create(['name' => 'Huyện Hưng Nguyên', 'city_id' => 29]);
        District::create(['name' => 'Thị xã Hoàng Mai', 'city_id' => 29]);

        //Hà Tĩnh
        District::create(['name' => 'Thành phố Hà Tĩnh', 'city_id' => 30]);
        District::create(['name' => 'Thị xã Hồng Lĩnh', 'city_id' => 30]);
        District::create(['name' => 'Huyện Hương Sơn', 'city_id' => 30]);
        District::create(['name' => 'Huyện Đức Thọ', 'city_id' => 30]);
        District::create(['name' => 'Huyện Vũ Quang', 'city_id' => 30]);
        District::create(['name' => 'Huyện Nghi Xuân', 'city_id' => 30]);
        District::create(['name' => 'Huyện Can Lộc', 'city_id' => 30]);
        District::create(['name' => 'Huyện Hương Khê', 'city_id' => 30]);
        District::create(['name' => 'Huyện Thạch Hà', 'city_id' => 30]);
        District::create(['name' => 'Huyện Cẩm Xuyên', 'city_id' => 30]);
        District::create(['name' => 'Thị xã Kỳ Anh', 'city_id' => 30]);
        District::create(['name' => 'Huyện Lộc Hà', 'city_id' => 30]);
        District::create(['name' => 'Huyện Kỳ Anh', 'city_id' => 30]);

        //Quảng Bình
        District::create(['name' => 'Thành Phố Đồng Hới', 'city_id' => 31]);
        District::create(['name' => 'Huyện Minh Hóa', 'city_id' => 31]);
        District::create(['name' => 'Huyện Tuyên Hóa', 'city_id' => 31]);
        District::create(['name' => 'Huyện Quảng Trạch', 'city_id' => 31]);
        District::create(['name' => 'Huyện Bố Trạch', 'city_id' => 31]);
        District::create(['name' => 'Huyện Quảng Ninh', 'city_id' => 31]);
        District::create(['name' => 'Huyện Lệ Thủy', 'city_id' => 31]);
        District::create(['name' => 'Thị xã Ba Đồn', 'city_id' => 31]);

        //Quảng Trị
        District::create(['name' => 'Thành phố Đông Hà', 'city_id' => 32]);
        District::create(['name' => 'Thị xã Quảng Trị', 'city_id' => 32]);
        District::create(['name' => 'Huyện Vĩnh Linh', 'city_id' => 32]);
        District::create(['name' => 'Huyện Hướng Hóa', 'city_id' => 32]);
        District::create(['name' => 'Huyện Gio Linh', 'city_id' => 32]);
        District::create(['name' => 'Huyện Đa Krông', 'city_id' => 32]);
        District::create(['name' => 'Huyện Cam Lộ', 'city_id' => 32]);
        District::create(['name' => 'Huyện Triệu Phong', 'city_id' => 32]);
        District::create(['name' => 'Huyện Hải Lăng', 'city_id' => 32]);
        District::create(['name' => 'Huyện Cồn Cỏ', 'city_id' => 32]);

        //Thừa Thiên - Huế
        District::create(['name' => 'Thành phố Huế', 'city_id' => 33]);
        District::create(['name' => 'Huyện Phong Điền', 'city_id' => 33]);
        District::create(['name' => 'Huyện Quảng Điền', 'city_id' => 33]);
        District::create(['name' => 'Huyện Phú Vang', 'city_id' => 33]);
        District::create(['name' => 'Thị xã Hương Thủy', 'city_id' => 33]);
        District::create(['name' => 'Thị xã Hương Trà', 'city_id' => 33]);
        District::create(['name' => 'Huyện A Lưới', 'city_id' => 33]);
        District::create(['name' => 'Huyện Phú Lộc', 'city_id' => 33]);
        District::create(['name' => 'Huyện Nam Đông', 'city_id' => 33]);

        //Quảng Nam
        District::create(['name' => 'Thành phố Tam Kỳ', 'city_id' => 34]);
        District::create(['name' => 'Thành phố Hội An', 'city_id' => 34]);
        District::create(['name' => 'Huyện Tây Giang', 'city_id' => 34]);
        District::create(['name' => 'Huyện Đông Giang', 'city_id' => 34]);
        District::create(['name' => 'Huyện Đại Lộc', 'city_id' => 34]);
        District::create(['name' => 'Thị xã Điện Bàn', 'city_id' => 34]);
        District::create(['name' => 'Huyện Duy Xuyên', 'city_id' => 34]);
        District::create(['name' => 'Huyện Quế Sơn', 'city_id' => 34]);
        District::create(['name' => 'Huyện Nam Giang', 'city_id' => 34]);
        District::create(['name' => 'Huyện Phước Sơn', 'city_id' => 34]);
        District::create(['name' => 'Huyện Hiệp Đức', 'city_id' => 34]);
        District::create(['name' => 'Huyện Thăng Bình', 'city_id' => 34]);
        District::create(['name' => 'Huyện Tiên Phước', 'city_id' => 34]);
        District::create(['name' => 'Huyện Bắc Trà My', 'city_id' => 34]);
        District::create(['name' => 'Huyện Nam Trà My', 'city_id' => 34]);
        District::create(['name' => 'Huyện Núi Thành', 'city_id' => 34]);
        District::create(['name' => 'Huyện Phú Ninh', 'city_id' => 34]);
        District::create(['name' => 'Huyện Nông Sơn', 'city_id' => 34]);

        //Quảng Ngãi
        District::create(['name' => 'Thành phố Quảng Ngãi', 'city_id' => 35]);
        District::create(['name' => 'Huyện Bình Sơn', 'city_id' => 35]);
        District::create(['name' => 'Huyện Trà Bồng', 'city_id' => 35]);
        District::create(['name' => 'Huyện Tây Trà', 'city_id' => 35]);
        District::create(['name' => 'Huyện Sơn Tịnh', 'city_id' => 35]);
        District::create(['name' => 'Huyện Tư Nghĩa', 'city_id' => 35]);
        District::create(['name' => 'Huyện Sơn Hà', 'city_id' => 35]);
        District::create(['name' => 'Huyện Sơn Tây', 'city_id' => 35]);
        District::create(['name' => 'Huyện Minh Long', 'city_id' => 35]);
        District::create(['name' => 'Huyện Nghĩa Hành', 'city_id' => 35]);
        District::create(['name' => 'Huyện Mộ Đức', 'city_id' => 35]);
        District::create(['name' => 'Huyện Đức Phổ', 'city_id' => 35]);
        District::create(['name' => 'Huyện Ba Tơ', 'city_id' => 35]);
        District::create(['name' => 'Huyện Lý Sơn', 'city_id' => 35]);

        //Kon Tum
        District::create(['name' => 'Thành phố Kon Tum', 'city_id' => 36]);
        District::create(['name' => 'Huyện Đắk Glei', 'city_id' => 36]);
        District::create(['name' => 'Huyện Ngọc Hồi', 'city_id' => 36]);
        District::create(['name' => 'Huyện Đắk Tô', 'city_id' => 36]);
        District::create(['name' => 'Huyện Kon Plông', 'city_id' => 36]);
        District::create(['name' => 'Huyện Kon Rẫy', 'city_id' => 36]);
        District::create(['name' => 'Huyện Đắk Hà', 'city_id' => 36]);
        District::create(['name' => 'Huyện Sa Thầy', 'city_id' => 36]);
        District::create(['name' => 'Huyện Tu Mơ Rông', 'city_id' => 36]);
        District::create(['name' => 'Huyện Ia H\' Drai', 'city_id' => 36]);

        //Bình Định
        District::create(['name' => 'Thành phố Qui Nhơn', 'city_id' => 37]);
        District::create(['name' => 'Huyện An Lão', 'city_id' => 37]);
        District::create(['name' => 'Huyện Hoài Nhơn', 'city_id' => 37]);
        District::create(['name' => 'Huyện Hoài Ân', 'city_id' => 37]);
        District::create(['name' => 'Huyện Phù Mỹ', 'city_id' => 37]);
        District::create(['name' => 'Huyện Vĩnh Thạnh', 'city_id' => 37]);
        District::create(['name' => 'Huyện Tây Sơn', 'city_id' => 37]);
        District::create(['name' => 'Huyện Phù Cát', 'city_id' => 37]);
        District::create(['name' => 'Thị xã An Nhơn', 'city_id' => 37]);
        District::create(['name' => 'Huyện Tuy Phước', 'city_id' => 37]);
        District::create(['name' => 'Huyện Vân Canh', 'city_id' => 37]);

        //Gia Lai
        District::create(['name' => 'Thành phố Pleiku', 'city_id' => 38]);
        District::create(['name' => 'Thị xã An Khê', 'city_id' => 38]);
        District::create(['name' => 'Thị xã Ayun Pa', 'city_id' => 38]);
        District::create(['name' => 'Huyện KBang', 'city_id' => 38]);
        District::create(['name' => 'Huyện Đăk Đoa', 'city_id' => 38]);
        District::create(['name' => 'Huyện Chư Păh', 'city_id' => 38]);
        District::create(['name' => 'Huyện Ia Grai', 'city_id' => 38]);
        District::create(['name' => 'Huyện Mang Yang', 'city_id' => 38]);
        District::create(['name' => 'Huyện Kông Chro', 'city_id' => 38]);
        District::create(['name' => 'Huyện Đức Cơ', 'city_id' => 38]);
        District::create(['name' => 'Huyện Chư Prông', 'city_id' => 38]);
        District::create(['name' => 'Huyện Chư Sê', 'city_id' => 38]);
        District::create(['name' => 'Huyện Đăk Pơ', 'city_id' => 38]);
        District::create(['name' => 'Huyện Ia Pa', 'city_id' => 38]);
        District::create(['name' => 'Huyện Krông Pa', 'city_id' => 38]);
        District::create(['name' => 'Huyện Phú Thiện', 'city_id' => 38]);
        District::create(['name' => 'Huyện Chư Pưh', 'city_id' => 38]);

        //Phú Yên
        District::create(['name' => 'Thành phố Tuy Hoà', 'city_id' => 39]);
        District::create(['name' => 'Thị xã Sông Cầu', 'city_id' => 39]);
        District::create(['name' => 'Huyện Đồng Xuân', 'city_id' => 39]);
        District::create(['name' => 'Huyện Tuy An', 'city_id' => 39]);
        District::create(['name' => 'Huyện Sơn Hòa', 'city_id' => 39]);
        District::create(['name' => 'Huyện Sông Hinh', 'city_id' => 39]);
        District::create(['name' => 'Huyện Tây Hoà', 'city_id' => 39]);
        District::create(['name' => 'Huyện Phú Hoà', 'city_id' => 39]);
        District::create(['name' => 'Huyện Đông Hòa', 'city_id' => 39]);

        //Đắk Lắk
        District::create(['name' => 'Thành phố Buôn Ma Thuột', 'city_id' => 40]);
        District::create(['name' => 'Thị Xã Buôn Hồ', 'city_id' => 40]);
        District::create(['name' => 'Huyện Ea H\'leo', 'city_id' => 40]);
        District::create(['name' => 'Huyện Ea Súp', 'city_id' => 40]);
        District::create(['name' => 'Huyện Buôn Đôn', 'city_id' => 40]);
        District::create(['name' => 'Huyện Cư M\'gar', 'city_id' => 40]);
        District::create(['name' => 'Huyện Krông Búk', 'city_id' => 40]);
        District::create(['name' => 'Huyện Krông Năng', 'city_id' => 40]);
        District::create(['name' => 'Huyện Ea Kar', 'city_id' => 40]);
        District::create(['name' => 'Huyện M\'Đrắk', 'city_id' => 40]);
        District::create(['name' => 'Huyện Krông Bông', 'city_id' => 40]);
        District::create(['name' => 'Huyện Krông Pắc', 'city_id' => 40]);
        District::create(['name' => 'Huyện Krông A Na', 'city_id' => 40]);
        District::create(['name' => 'Huyện Lắk', 'city_id' => 40]);
        District::create(['name' => 'Huyện Cư Kuin', 'city_id' => 40]);

        //Đăk Nông
        District::create(['name' => 'Thị xã Gia Nghĩa', 'city_id' => 41]);
        District::create(['name' => 'Huyện Đăk Glong', 'city_id' => 41]);
        District::create(['name' => 'Huyện Cư Jút', 'city_id' => 41]);
        District::create(['name' => 'Huyện Đắk Mil', 'city_id' => 41]);
        District::create(['name' => 'Huyện Krông Nô', 'city_id' => 41]);
        District::create(['name' => 'Huyện Đắk Song', 'city_id' => 41]);
        District::create(['name' => 'Huyện Đắk R\'Lấp', 'city_id' => 41]);
        District::create(['name' => 'Huyện Tuy Đức', 'city_id' => 41]);

        //Khánh Hòa
        District::create(['name' => 'Thành phố Nha Trang', 'city_id' => 42]);
        District::create(['name' => 'Thành phố Cam Ranh', 'city_id' => 42]);
        District::create(['name' => 'Huyện Cam Lâm', 'city_id' => 42]);
        District::create(['name' => 'Huyện Vạn Ninh', 'city_id' => 42]);
        District::create(['name' => 'Thị xã Ninh Hòa', 'city_id' => 42]);
        District::create(['name' => 'Huyện Khánh Vĩnh', 'city_id' => 42]);
        District::create(['name' => 'Huyện Diên Khánh', 'city_id' => 42]);
        District::create(['name' => 'Huyện Khánh Sơn', 'city_id' => 42]);
        District::create(['name' => 'Huyện Trường Sa', 'city_id' => 42]);

        //Ninh Thuận
        District::create(['name' => 'Thành phố Phan Rang-Tháp Chàm', 'city_id' => 43]);
        District::create(['name' => 'Huyện Bác Ái', 'city_id' => 43]);
        District::create(['name' => 'Huyện Ninh Sơn', 'city_id' => 43]);
        District::create(['name' => 'Huyện Ninh Hải', 'city_id' => 43]);
        District::create(['name' => 'Huyện Ninh Phước', 'city_id' => 43]);
        District::create(['name' => 'Huyện Thuận Bắc', 'city_id' => 43]);
        District::create(['name' => 'Huyện Thuận Nam', 'city_id' => 43]);

        //Lâm Đồng
        District::create(['name' => 'Thành phố Đà Lạt', 'city_id' => 44]);
        District::create(['name' => 'Thành phố Bảo Lộc', 'city_id' => 44]);
        District::create(['name' => 'Huyện Đam Rông', 'city_id' => 44]);
        District::create(['name' => 'Huyện Lạc Dương', 'city_id' => 44]);
        District::create(['name' => 'Huyện Lâm Hà', 'city_id' => 44]);
        District::create(['name' => 'Huyện Đơn Dương', 'city_id' => 44]);
        District::create(['name' => 'Huyện Đức Trọng', 'city_id' => 44]);
        District::create(['name' => 'Huyện Di Linh', 'city_id' => 44]);
        District::create(['name' => 'Huyện Bảo Lâm', 'city_id' => 44]);
        District::create(['name' => 'Huyện Đạ Huoai', 'city_id' => 44]);
        District::create(['name' => 'Huyện Đạ Tẻh', 'city_id' => 44]);
        District::create(['name' => 'Huyện Cát Tiên', 'city_id' => 44]);

        //Bà Rịa - Vũng Tàu
        District::create(['name' => 'Thành phố Vũng Tàu', 'city_id' => 45]);
        District::create(['name' => 'Thành phố Bà Rịa', 'city_id' => 45]);
        District::create(['name' => 'Huyện Châu Đức', 'city_id' => 45]);
        District::create(['name' => 'Huyện Xuyên Mộc', 'city_id' => 45]);
        District::create(['name' => 'Huyện Long Điền', 'city_id' => 45]);
        District::create(['name' => 'Huyện Đất Đỏ', 'city_id' => 45]);
        District::create(['name' => 'Huyện Tân Thành', 'city_id' => 45]);
        District::create(['name' => 'Huyện Côn Đảo', 'city_id' => 45]);

        //Bình Thuận
        District::create(['name' => 'Thành phố Phan Thiết', 'city_id' => 46]);
        District::create(['name' => 'Thị xã La Gi', 'city_id' => 46]);
        District::create(['name' => 'Huyện Tuy Phong', 'city_id' => 46]);
        District::create(['name' => 'Huyện Bắc Bình', 'city_id' => 46]);
        District::create(['name' => 'Huyện Hàm Thuận Bắc', 'city_id' => 46]);
        District::create(['name' => 'Huyện Hàm Thuận Nam', 'city_id' => 46]);
        District::create(['name' => 'Huyện Tánh Linh', 'city_id' => 46]);
        District::create(['name' => 'Huyện Đức Linh', 'city_id' => 46]);
        District::create(['name' => 'Huyện Hàm Tân', 'city_id' => 46]);
        District::create(['name' => 'Huyện Phú Quí', 'city_id' => 46]);

        //Đồng Nai
        District::create(['name' => 'Thành phố Biên Hòa', 'city_id' => 47]);
        District::create(['name' => 'Thị xã Long Khánh', 'city_id' => 47]);
        District::create(['name' => 'Huyện Tân Phú', 'city_id' => 47]);
        District::create(['name' => 'Huyện Vĩnh Cửu', 'city_id' => 47]);
        District::create(['name' => 'Huyện Định Quán', 'city_id' => 47]);
        District::create(['name' => 'Huyện Trảng Bom', 'city_id' => 47]);
        District::create(['name' => 'Huyện Thống Nhất', 'city_id' => 47]);
        District::create(['name' => 'Huyện Cẩm Mỹ', 'city_id' => 47]);
        District::create(['name' => 'Huyện Long Thành', 'city_id' => 47]);
        District::create(['name' => 'Huyện Xuân Lộc', 'city_id' => 47]);
        District::create(['name' => 'Huyện Nhơn Trạch', 'city_id' => 47]);

        //Bình Dương
        District::create(['name' => 'Thành phố Thủ Dầu Một', 'city_id' => 48]);
        District::create(['name' => 'Huyện Bàu Bàng', 'city_id' => 48]);
        District::create(['name' => 'Huyện Dầu Tiếng', 'city_id' => 48]);
        District::create(['name' => 'Thị xã Bến Cát', 'city_id' => 48]);
        District::create(['name' => 'Huyện Phú Giáo', 'city_id' => 48]);
        District::create(['name' => 'Thị xã Tân Uyên', 'city_id' => 48]);
        District::create(['name' => 'Thị xã Dĩ An', 'city_id' => 48]);
        District::create(['name' => 'Thị xã Thuận An', 'city_id' => 48]);
        District::create(['name' => 'Huyện Bắc Tân Uyên', 'city_id' => 48]);

        //Bình Phước
        District::create(['name' => 'Thị xã Phước Long', 'city_id' => 49]);
        District::create(['name' => 'Thị xã Đồng Xoài', 'city_id' => 49]);
        District::create(['name' => 'Thị xã Bình Long', 'city_id' => 49]);
        District::create(['name' => 'Huyện Bù Gia Mập', 'city_id' => 49]);
        District::create(['name' => 'Huyện Lộc Ninh', 'city_id' => 49]);
        District::create(['name' => 'Huyện Bù Đốp', 'city_id' => 49]);
        District::create(['name' => 'Huyện Hớn Quản', 'city_id' => 49]);
        District::create(['name' => 'Huyện Đồng Phú', 'city_id' => 49]);
        District::create(['name' => 'Huyện Bù Đăng', 'city_id' => 49]);
        District::create(['name' => 'Huyện Chơn Thành', 'city_id' => 49]);
        District::create(['name' => 'Huyện Phú Riềng', 'city_id' => 49]);

        //Tây Ninh
        District::create(['name' => 'Thành phố Tây Ninh', 'city_id' => 50]);
        District::create(['name' => 'Huyện Tân Biên', 'city_id' => 50]);
        District::create(['name' => 'Huyện Tân Châu', 'city_id' => 50]);
        District::create(['name' => 'Huyện Dương Minh Châu', 'city_id' => 50]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 50]);
        District::create(['name' => 'Huyện Hòa Thành', 'city_id' => 50]);
        District::create(['name' => 'Huyện Gò Dầu', 'city_id' => 50]);
        District::create(['name' => 'Huyện Bến Cầu', 'city_id' => 50]);
        District::create(['name' => 'Huyện Trảng Bàng', 'city_id' => 50]);

        //Long An
        District::create(['name' => 'Thành phố Tân An', 'city_id' => 51]);
        District::create(['name' => 'Thị xã Kiến Tường', 'city_id' => 51]);
        District::create(['name' => 'Huyện Tân Hưng', 'city_id' => 51]);
        District::create(['name' => 'Huyện Vĩnh Hưng', 'city_id' => 51]);
        District::create(['name' => 'Huyện Mộc Hóa', 'city_id' => 51]);
        District::create(['name' => 'Huyện Tân Thạnh', 'city_id' => 51]);
        District::create(['name' => 'Huyện Thạnh Hóa', 'city_id' => 51]);
        District::create(['name' => 'Huyện Đức Huệ', 'city_id' => 51]);
        District::create(['name' => 'Huyện Đức Hòa', 'city_id' => 51]);
        District::create(['name' => 'Huyện Bến Lức', 'city_id' => 51]);
        District::create(['name' => 'Huyện Thủ Thừa', 'city_id' => 51]);
        District::create(['name' => 'Huyện Tân Trụ', 'city_id' => 51]);
        District::create(['name' => 'Huyện Cần Đước', 'city_id' => 51]);
        District::create(['name' => 'Huyện Cần Giuộc', 'city_id' => 51]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 51]);

        //Tiền Giang
        District::create(['name' => 'Thành phố Mỹ Tho', 'city_id' => 52]);
        District::create(['name' => 'Thị xã Gò Công', 'city_id' => 52]);
        District::create(['name' => 'Thị xã Cai Lậy', 'city_id' => 52]);
        District::create(['name' => 'Huyện Tân Phước', 'city_id' => 52]);
        District::create(['name' => 'Huyện Cái Bè', 'city_id' => 52]);
        District::create(['name' => 'Huyện Cai Lậy', 'city_id' => 52]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 52]);
        District::create(['name' => 'Huyện Chợ Gạo', 'city_id' => 52]);
        District::create(['name' => 'Huyện Gò Công Tây', 'city_id' => 52]);
        District::create(['name' => 'Huyện Gò Công Đông', 'city_id' => 52]);
        District::create(['name' => 'Huyện Tân Phú Đông', 'city_id' => 52]);

        //Đồng Tháp
        District::create(['name' => 'Thành phố Cao Lãnh', 'city_id' => 53]);
        District::create(['name' => 'Thành phố Sa Đéc', 'city_id' => 53]);
        District::create(['name' => 'Thị xã Hồng Ngự', 'city_id' => 53]);
        District::create(['name' => 'Huyện Tân Hồng', 'city_id' => 53]);
        District::create(['name' => 'Huyện Hồng Ngự', 'city_id' => 53]);
        District::create(['name' => 'Huyện Tam Nông', 'city_id' => 53]);
        District::create(['name' => 'Huyện Tháp Mười', 'city_id' => 53]);
        District::create(['name' => 'Huyện Cao Lãnh', 'city_id' => 53]);
        District::create(['name' => 'Huyện Thanh Bình', 'city_id' => 53]);
        District::create(['name' => 'Huyện Lấp Vò', 'city_id' => 53]);
        District::create(['name' => 'Huyện Lai Vung', 'city_id' => 53]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 53]);

        //An Giang
        District::create(['name' => 'Thành phố Long Xuyên', 'city_id' => 54]);
        District::create(['name' => 'Thành phố Châu Đốc', 'city_id' => 54]);
        District::create(['name' => 'Huyện An Phú', 'city_id' => 54]);
        District::create(['name' => 'Thị xã Tân Châu', 'city_id' => 54]);
        District::create(['name' => 'Huyện Phú Tân', 'city_id' => 54]);
        District::create(['name' => 'Huyện Châu Phú', 'city_id' => 54]);
        District::create(['name' => 'Huyện Tịnh Biên', 'city_id' => 54]);
        District::create(['name' => 'Huyện Tri Tôn', 'city_id' => 54]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 54]);
        District::create(['name' => 'Huyện Chợ Mới', 'city_id' => 54]);
        District::create(['name' => 'Huyện Thoại Sơn', 'city_id' => 54]);

        //Vĩnh Long
        District::create(['name' => 'Thành phố Vĩnh Long', 'city_id' => 55]);
        District::create(['name' => 'Huyện Long Hồ', 'city_id' => 55]);
        District::create(['name' => 'Huyện Mang Thít', 'city_id' => 55]);
        District::create(['name' => 'Huyện Vũng Liêm', 'city_id' => 55]);
        District::create(['name' => 'Huyện Tam Bình', 'city_id' => 55]);
        District::create(['name' => 'Thị xã Bình Minh', 'city_id' => 55]);
        District::create(['name' => 'Huyện Trà Ôn', 'city_id' => 55]);
        District::create(['name' => 'Huyện Bình Tân', 'city_id' => 55]);

        //Cần Thơ
        District::create(['name' => 'Quận Ninh Kiều', 'city_id' => 56]);
        District::create(['name' => 'Quận Ô Môn', 'city_id' => 56]);
        District::create(['name' => 'Quận Bình Thuỷ', 'city_id' => 56]);
        District::create(['name' => 'Quận Cái Răng', 'city_id' => 56]);
        District::create(['name' => 'Quận Thốt Nốt', 'city_id' => 56]);
        District::create(['name' => 'Huyện Vĩnh Thạnh', 'city_id' => 56]);
        District::create(['name' => 'Huyện Cờ Đỏ', 'city_id' => 56]);
        District::create(['name' => 'Huyện Phong Điền', 'city_id' => 56]);
        District::create(['name' => 'Huyện Thới Lai', 'city_id' => 56]);

        //Hậu Giang
        District::create(['name' => 'Thành phố Vị Thanh', 'city_id' => 57]);
        District::create(['name' => 'Thị xã Ngã Bảy', 'city_id' => 57]);
        District::create(['name' => 'Huyện Châu Thành A', 'city_id' => 57]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 57]);
        District::create(['name' => 'Huyện Phụng Hiệp', 'city_id' => 57]);
        District::create(['name' => 'Huyện Vị Thuỷ', 'city_id' => 57]);
        District::create(['name' => 'Thị xã Long Mỹ', 'city_id' => 57]);
        District::create(['name' => 'Huyện Long Mỹ', 'city_id' => 57]);

        //Kiên Giang
        District::create(['name' => 'Thành phố Rạch Giá', 'city_id' => 58]);
        District::create(['name' => 'Thị xã Hà Tiên', 'city_id' => 58]);
        District::create(['name' => 'Huyện Kiên Lương', 'city_id' => 58]);
        District::create(['name' => 'Huyện Hòn Đất', 'city_id' => 58]);
        District::create(['name' => 'Huyện Tân Hiệp', 'city_id' => 58]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 58]);
        District::create(['name' => 'Huyện Giồng Riềng', 'city_id' => 58]);
        District::create(['name' => 'Huyện Gò Quao', 'city_id' => 58]);
        District::create(['name' => 'Huyện An Biên', 'city_id' => 58]);
        District::create(['name' => 'Huyện An Minh', 'city_id' => 58]);
        District::create(['name' => 'Huyện Vĩnh Thuận', 'city_id' => 58]);
        District::create(['name' => 'Huyện Phú Quốc', 'city_id' => 58]);
        District::create(['name' => 'Huyện Kiên Hải', 'city_id' => 58]);
        District::create(['name' => 'Huyện U Minh Thượng', 'city_id' => 58]);
        District::create(['name' => 'Huyện Giang Thành', 'city_id' => 58]);

        //Bến Tre
        District::create(['name' => 'Thành phố Bến Tre', 'city_id' => 59]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 59]);
        District::create(['name' => 'Huyện Chợ Lách', 'city_id' => 59]);
        District::create(['name' => 'Huyện Mỏ Cày Nam', 'city_id' => 59]);
        District::create(['name' => 'Huyện Giồng Trôm', 'city_id' => 59]);
        District::create(['name' => 'Huyện Bình Đại', 'city_id' => 59]);
        District::create(['name' => 'Huyện Ba Tri', 'city_id' => 59]);
        District::create(['name' => 'Huyện Thạnh Phú', 'city_id' => 59]);
        District::create(['name' => 'Huyện Mỏ Cày Bắc', 'city_id' => 59]);

        //Trà Vinh
        District::create(['name' => 'Thành phố Trà Vinh', 'city_id' => 60]);
        District::create(['name' => 'Huyện Càng Long', 'city_id' => 60]);
        District::create(['name' => 'Huyện Cầu Kè', 'city_id' => 60]);
        District::create(['name' => 'Huyện Tiểu Cần', 'city_id' => 60]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 60]);
        District::create(['name' => 'Huyện Cầu Ngang', 'city_id' => 60]);
        District::create(['name' => 'Huyện Trà Cú', 'city_id' => 60]);
        District::create(['name' => 'Thị xã Duyên Hải', 'city_id' => 60]);
        District::create(['name' => 'Huyện Duyên Hải', 'city_id' => 60]);

        //Sóc Trăng
        District::create(['name' => 'Thành phố Sóc Trăng', 'city_id' => 61]);
        District::create(['name' => 'Huyện Châu Thành', 'city_id' => 61]);
        District::create(['name' => 'Huyện Kế Sách', 'city_id' => 61]);
        District::create(['name' => 'Huyện Mỹ Tú', 'city_id' => 61]);
        District::create(['name' => 'Huyện Cù Lao Dung', 'city_id' => 61]);
        District::create(['name' => 'Huyện Long Phú', 'city_id' => 61]);
        District::create(['name' => 'Huyện Mỹ Xuyên', 'city_id' => 61]);
        District::create(['name' => 'Thị xã Ngã Năm', 'city_id' => 61]);
        District::create(['name' => 'Huyện Thạnh Trị', 'city_id' => 61]);
        District::create(['name' => 'Thị xã Vĩnh Châu', 'city_id' => 61]);
        District::create(['name' => 'Huyện Trần Đề', 'city_id' => 61]);

        //Bạc Liêu
        District::create(['name' => 'Thành phố Bạc Liêu', 'city_id' => 62]);
        District::create(['name' => 'Huyện Hồng Dân', 'city_id' => 62]);
        District::create(['name' => 'Huyện Phước Long', 'city_id' => 62]);
        District::create(['name' => 'Huyện Vĩnh Lợi', 'city_id' => 62]);
        District::create(['name' => 'Thị xã Giá Rai', 'city_id' => 62]);
        District::create(['name' => 'Huyện Đông Hải', 'city_id' => 62]);
        District::create(['name' => 'Huyện Hoà Bình', 'city_id' => 62]);

        //Cà Mau
        District::create(['name' => 'Thành phố Cà Mau', 'city_id' => 63]);
        District::create(['name' => 'Huyện U Minh', 'city_id' => 63]);
        District::create(['name' => 'Huyện Thới Bình', 'city_id' => 63]);
        District::create(['name' => 'Huyện Trần Văn Thời', 'city_id' => 63]);
        District::create(['name' => 'Huyện Cái Nước', 'city_id' => 63]);
        District::create(['name' => 'Huyện Đầm Dơi', 'city_id' => 63]);
        District::create(['name' => 'Huyện Năm Căn', 'city_id' => 63]);
        District::create(['name' => 'Huyện Phú Tân', 'city_id' => 63]);
        District::create(['name' => 'Huyện Ngọc Hiển', 'city_id' => 63]);

    }
}
