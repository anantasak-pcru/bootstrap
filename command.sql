create database bootstrap_workshop collate utf8_general_ci;

use bootstrap_workshop;

create table provinces
(
    id   int          not null auto_increment primary key,
    name varchar(100) not null default ''
);

create table travel_location
(
    id          int auto_increment primary key not null,
    name        varchar(100) default '',
    url         varchar(300) default '',
    province_id int                            not null,
    rating      int(1)       default 0,
    foreign key (province_id) references provinces (id)
);

insert into provinces (name)
values ('เชียงใหม่'),
       ('น่าน'),
       ('พะเยา'),
       ('แพร่'),
       ('แม่ฮ่องสอน'),
       ('ลำปาง'),
       ('ลำพูน'),
       ('อุตรดิตถ์');

insert into travel_location (name, province_id, rating, url)
values ('ดอยอินทนนท์', 1, 5,
        'https://travel.mthai.com/app/uploads/2014/10/%E0%B8%AD%E0%B8%B8%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%99%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%AD%E0%B8%A2%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%99%E0%B8%99%E0%B8%97%E0%B9%8C.jpg'),
       ('ดอยสุเทพ', 1, 5,
        'https://lh3.googleusercontent.com/proxy/BKNpbul5kbqSKGESUI4Ne-asRj4whus50JCEsS38knds67KqPT-un6P2-mqzcv4oS7Exf_6YPzIbbzckGq21PJF1CQLxzpOBI02NQRY32LZbOaEEag'),
       ('ดอยหลวงเชียงดาว', 1, 3,
        'https://www.hellowinter.xn--60-qqiho9gn1etczag5gd0g7etg.com/wp-content/uploads/2019/12/7.%E0%B8%94%E0%B8%AD%E0%B8%A2%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87%E0%B9%80%E0%B8%8A%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B8%94%E0%B8%B2%E0%B8%A7.jpg'),
       ('ดอยอ่างขาง', 1, 2, 'https://mpics.mgronline.com/pics/Images/563000000351201.JPEG'),
       ('ดอยผ้าห่มปก', 1, 3,
        'https://s.isanook.com/tr/0/rp/r/w850/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3RyLzAvdWQvMjgzLzE0MTc3MzMvdGd5dXUuanBn.jpg'),
       ('สวนพฤกษศาสตร์สมเด็จพระนางเจ้าสิริกิติ์', 1, 2,
        'https://upload.wikimedia.org/wikipedia/commons/e/ee/The_Queen_Sirikit_Botanic_Garden_-_Chiang_Mai_2013_2651.jpg'),
       ('ปางช้างแม่แตง', 1, 1,
        'https://lh3.googleusercontent.com/proxy/04EabncIdOBJSYKhVsuM845SZnwcLFFNQHoOiIWeN3YMEiAHNxpmGJWKZzyC3BkVTqjZa4m0j-vQPNmj4xbD-4YBIwQLPUAKpjyOtIJuMtznj6ECkey0HTvVOPhYvMvEdSMPnpsX_bFqbBr6IxMdsYGuwKt4n-qnyr4Fd5c'),
       ('น้ำพุร้อนสันกำแพง', 1, 1, 'https://www.emagtravel.com/wp-content/uploads/2011/07/s-hotspring-800.jpg'),
       ('ทุ่งบัวตอง', 5, 3, 'https://travel.mthai.com/app/uploads/2018/10/maehongsorn-banner.jpg'),
       ('ดอยแม่อูคอ', 5, 5,
        'https://travel.mthai.com/app/uploads/2019/10/72714256_2444240212362637_4265378742311845888_n.jpg'),
       ('ถ้ำปลา', 5, 3, 'https://www.xn--72c5aba9c2a3b8a2m8ae.com/wp-content/uploads/2014/12/0-Thumpla-04.jpg'),
       ('ถ้ำแก้วโกมล', 5, 2, 'https://www.108trips.com/upload/activity/2012-11/journey_blog_1353482858.jpg');