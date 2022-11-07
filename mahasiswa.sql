-- untuk menampilkan all database
show databases;

-- create database fakultas
create database fakultas; 

--  untuk memakai database fakultas
use fakultas; 

-- create table jurusan
create table jurusan(
    id integer primary key auto_increment,
    kode char(4) not null,
    nama varchar (50) not null
);

-- create table mahasiswa
create table mahasiswa(
    id integer primary key auto_increment,
    id_jurusan integer not null,
    nim char (8) not null, 
    nama varchar (50) not null,
    jenis_kelamin enum ('laki-laki', 'perempuan')  not null,
    tempat_lahir varchar (50) not null,
    tanggal_lahir date not null,
    alamat varchar (255) not null,
    foreign key (id_jurusan) references jurusan (id)
);

-- untuk melihat tabel yang dibuat
show tables;

-- untuk melihat atribut di tabel jurusan
desc jurusan; 
-- untuk melihat atribut di tabel mahasiswa
desc mahasiswa; 

-- untuk menambah data di tabel jurusan
insert into jurusan (kode, nama) values ("MFHM", "Manajemen")

-- untuk lihat data di tabel jurusan
select * from jurusan;

-- untuk menambah data di tabel mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin,tempat_lahir,tanggal_lahir, alamat) values (1,"20317100", "Farah", "perempuan", "Mojokerto", "03-10-2002","Jl.Pisang no 2");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin,tempat_lahir,tanggal_lahir, alamat) values (1,"20247100", "Kaka", "laki-laki", "Malang", "05-12-2002","Jl.Semangka no 10");

-- untuk lihat data di tabel mahasiswa
select * from mahasiswa;

-- untuk menghapus data sesuai kondisi where pada tabel mahasiswa
delete from mahasiswa where id='2';

-- untuk menghapus semua data pada tabel mahasiswa
delete from mahasiswa;

-- untuk update data sesuai kondisi where pada tabel jurusan
update jurusan set nama="Manajemen Informatika" where id='1';

-- -- untuk update data sesuai kondisi where pada tabel mahasiswa
update mahasiswa set tanggal_lahir="2001-10-04" where id='4';
update mahasiswa set tanggal_lahir="2002-11-09" where id='5';




 