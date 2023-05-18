--
-- PostgreSQL database dump
--

-- Dumped from database version 14.0
-- Dumped by pg_dump version 14.0

-- Started on 2023-05-18 20:10:40

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 3492 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 214 (class 1259 OID 163946)
-- Name: admin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.admin (
    email character varying(150) NOT NULL,
    password character varying(150),
    nama character varying(100),
    alamat text,
    phone character varying(100)
);


ALTER TABLE public.admin OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 204920)
-- Name: bahan_baku; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bahan_baku (
    kd_bb character varying(50) NOT NULL,
    nama character varying(100),
    satuan character varying(50),
    jml integer,
    minbel integer,
    harga integer
);


ALTER TABLE public.bahan_baku OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 180300)
-- Name: bahanbaku; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bahanbaku (
    kd_bb character varying(15) NOT NULL,
    nama_bb character varying(100),
    hrg_bb integer
);


ALTER TABLE public.bahanbaku OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 180321)
-- Name: bahanpen; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bahanpen (
    kode_bp character varying(15) NOT NULL,
    nama_bp character varying(100)
);


ALTER TABLE public.bahanpen OWNER TO postgres;

--
-- TOC entry 226 (class 1259 OID 204917)
-- Name: bbproduk; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bbproduk (
    kd_pj character varying(100),
    kd_bb character varying(100),
    nama character varying(100),
    satuan character varying(50),
    jumlah integer
);


ALTER TABLE public.bbproduk OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 196729)
-- Name: biaya_bb; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.biaya_bb (
    bukti character varying(50) NOT NULL,
    kd_bb character varying(50),
    total integer,
    kd_sup character varying(50),
    tanggal date
);


ALTER TABLE public.biaya_bb OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 180312)
-- Name: bop; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.bop (
    tanggal date,
    bukti character varying(50) NOT NULL,
    nama_transaksi character varying(100),
    ket character varying(100),
    satuan integer,
    harga money,
    total money NOT NULL
);


ALTER TABLE public.bop OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 180315)
-- Name: btkl; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.btkl (
    tanggal date,
    bukti character varying(50) NOT NULL,
    nama_transaksi character varying(100),
    waktu_kerja character varying(50),
    upah money,
    total integer
);


ALTER TABLE public.btkl OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 163938)
-- Name: buku_besar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.buku_besar (
    kdakun character varying NOT NULL,
    nmakun character varying,
    tgl date,
    keterangan character varying,
    ref character varying,
    debit integer,
    kredit integer
);


ALTER TABLE public.buku_besar OWNER TO postgres;

--
-- TOC entry 237 (class 1259 OID 213154)
-- Name: customer; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.customer (
    id_cus character varying NOT NULL,
    nama character varying,
    alamat character varying,
    nohp character varying
);


ALTER TABLE public.customer OWNER TO postgres;

--
-- TOC entry 228 (class 1259 OID 204923)
-- Name: dc001; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.dc001 (
    kd_bb character varying(50) NOT NULL,
    jumlah integer
);


ALTER TABLE public.dc001 OWNER TO postgres;

--
-- TOC entry 232 (class 1259 OID 204937)
-- Name: detail_produk; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.detail_produk (
    kd_pj character varying(50),
    kd_bb character varying(50),
    jumlah integer,
    kode_bahan character varying(50)
);


ALTER TABLE public.detail_produk OWNER TO postgres;

--
-- TOC entry 239 (class 1259 OID 221326)
-- Name: detailproduksi; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.detailproduksi (
    noproduksi character varying(100),
    kdproduk character varying(100),
    nmproduk character varying(100),
    qty integer,
    harga integer,
    total integer
);


ALTER TABLE public.detailproduksi OWNER TO postgres;

--
-- TOC entry 234 (class 1259 OID 213126)
-- Name: gambar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.gambar (
    id_gbr integer NOT NULL,
    gambar character varying(100)
);


ALTER TABLE public.gambar OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 163929)
-- Name: jurnal_umum; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.jurnal_umum (
    id integer NOT NULL,
    tgl date,
    bukti character varying,
    keterangan character varying,
    ref character varying,
    debit integer,
    kredit integer
);


ALTER TABLE public.jurnal_umum OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 163928)
-- Name: jurnal_umum_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.jurnal_umum_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jurnal_umum_id_seq OWNER TO postgres;

--
-- TOC entry 3493 (class 0 OID 0)
-- Dependencies: 211
-- Name: jurnal_umum_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.jurnal_umum_id_seq OWNED BY public.jurnal_umum.id;


--
-- TOC entry 218 (class 1259 OID 180306)
-- Name: lap_hpp; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.lap_hpp (
    tanggal date NOT NULL,
    ref1 character varying(20),
    keterangan1 character varying(50),
    ref2 character varying(20),
    keterangan2 character varying(50),
    total integer
);


ALTER TABLE public.lap_hpp OWNER TO postgres;

--
-- TOC entry 229 (class 1259 OID 204926)
-- Name: mc002; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mc002 (
    kd_bb character varying(50) NOT NULL,
    jumlah integer
);


ALTER TABLE public.mc002 OWNER TO postgres;

--
-- TOC entry 230 (class 1259 OID 204929)
-- Name: mca002; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mca002 (
    kd_bb character varying(50) NOT NULL,
    jumlah integer
);


ALTER TABLE public.mca002 OWNER TO postgres;

--
-- TOC entry 238 (class 1259 OID 221318)
-- Name: minta_produk; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.minta_produk (
    tgl date,
    no_produk character varying(100) NOT NULL,
    nama character varying(100),
    detail character varying(100),
    status character varying(100)
);


ALTER TABLE public.minta_produk OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 180309)
-- Name: neraca; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.neraca (
    tanggal date,
    ref character varying(50) NOT NULL,
    nama_akun character varying(50),
    debit character varying(50),
    kredit character varying(50)
);


ALTER TABLE public.neraca OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 180303)
-- Name: pegawai; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pegawai (
    id_pegawai character varying(15) NOT NULL,
    nama_peg character varying(100),
    bagian character varying(50),
    alamat_peg character varying(100),
    nohp_peg numeric(15,0)
);


ALTER TABLE public.pegawai OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 163921)
-- Name: pelanggan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pelanggan (
    noid character varying(150) NOT NULL,
    nama character varying(150),
    alamat character varying(50),
    tmptlahir character varying(100),
    tgllhr date,
    email character varying(100),
    nohp character varying(100)
);


ALTER TABLE public.pelanggan OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 180318)
-- Name: pembelianbb; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pembelianbb (
    tanggal date,
    bukti character varying(50) NOT NULL,
    kode_bb character varying(15),
    jml_bhn character varying(50),
    hrg_bhn character varying(50),
    total integer,
    suplier character varying(50)
);


ALTER TABLE public.pembelianbb OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 163914)
-- Name: pengguna; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pengguna (
    email character varying(150) NOT NULL,
    password character varying(150),
    posisi character varying(50),
    nama character varying(100),
    alamat text,
    phone character varying(100)
);


ALTER TABLE public.pengguna OWNER TO postgres;

--
-- TOC entry 233 (class 1259 OID 204943)
-- Name: persediaan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.persediaan (
    tanggal date,
    kd_pj character varying(50),
    nama_pj character varying(100),
    masuk integer,
    keluar integer
);


ALTER TABLE public.persediaan OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 204912)
-- Name: produkjadi; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.produkjadi (
    kd_pj character varying(50) NOT NULL,
    nama_pj character varying(100),
    satuan character varying(100),
    hpp integer,
    gambar character varying(200)
);


ALTER TABLE public.produkjadi OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 180297)
-- Name: suplier; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.suplier (
    kd_sup character varying(15) NOT NULL,
    nama_sup character varying(100),
    nohp_sup character varying(20),
    alamat_sup character varying(150)
);


ALTER TABLE public.suplier OWNER TO postgres;

--
-- TOC entry 231 (class 1259 OID 204934)
-- Name: tc001; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tc001 (
    kd_bb character varying(50) NOT NULL,
    jumlah integer
);


ALTER TABLE public.tc001 OWNER TO postgres;

--
-- TOC entry 235 (class 1259 OID 213142)
-- Name: tju; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tju (
    tgl date,
    bukti character varying,
    ref1 character varying,
    keterangan1 character varying,
    ref2 character varying,
    keterangan2 character varying,
    nominal integer
);


ALTER TABLE public.tju OWNER TO postgres;

--
-- TOC entry 236 (class 1259 OID 213147)
-- Name: vbb; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.vbb AS
 SELECT tju.tgl,
    tju.ref1,
    tju.keterangan1,
    tju.ref2,
    tju.keterangan2,
    tju.nominal AS debit,
    0 AS kredit
   FROM public.tju
UNION
 SELECT tju.tgl,
    tju.ref1,
    tju.keterangan1,
    tju.ref2,
    tju.keterangan2,
    0 AS debit,
    tju.nominal AS kredit
   FROM public.tju;


ALTER TABLE public.vbb OWNER TO postgres;

--
-- TOC entry 3280 (class 2604 OID 163932)
-- Name: jurnal_umum id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jurnal_umum ALTER COLUMN id SET DEFAULT nextval('public.jurnal_umum_id_seq'::regclass);


--
-- TOC entry 3462 (class 0 OID 163946)
-- Dependencies: 214
-- Data for Name: admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.admin VALUES ('riri@gmail.com', 'admin', 'riri', 'Riri', '082199837645');


--
-- TOC entry 3475 (class 0 OID 204920)
-- Dependencies: 227
-- Data for Name: bahan_baku; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.bahan_baku VALUES ('BB-AAA/0001', 'Dark Chocolate', 'gram', 10000, 100, 1800000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0003', 'White Chocolate', 'gram', 12000, 100, 2200000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0004', 'Caramel Chocolate', 'gram', 10000, 100, 2802600);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0005', 'Berry Chocolate', 'gram', 10000, 100, 3100000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0006', 'Whipping cream', 'gram', 5000, 200, 2450000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0008', 'Matcha Powder', 'gram', 10000, 100, 400000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0010', 'Robusta Coffe', 'gram', 500, 100, 100000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0011', 'Gula', 'gram', 2000, 1000, 400000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0012', 'Unsalted Butter', 'gram', 1500, 600, 1584000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0013', 'Taro Powder', 'gram', 500, 300, 1040000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0014', 'Vanilla Powder', 'gram', 1000, 500, 2500000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0015', 'Cinammon Crumb', 'gram', 1500, 1000, 1980000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0017', 'Strawberry Powder', 'gram', 1000, 500, 3000000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0018', 'Cream', 'ml', 2000, 1000, 1580000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0016', 'Mascarpone', 'gram', 3000, 3000, 2499999);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0007', 'Butter', 'gram', 500, 200, 200000);
INSERT INTO public.bahan_baku VALUES ('BB-AAA/0002', 'Milk Chocolate', 'gram', 10000, 150, 1800000);


--
-- TOC entry 3464 (class 0 OID 180300)
-- Dependencies: 216
-- Data for Name: bahanbaku; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.bahanbaku VALUES ('BB-AAA/0001', 'Chocolate', 24000);
INSERT INTO public.bahanbaku VALUES ('BB-AAA/0002', 'White Chocolate', 30000);
INSERT INTO public.bahanbaku VALUES ('BB-AAA/0003', 'Berry Cheese', 32000);


--
-- TOC entry 3471 (class 0 OID 180321)
-- Dependencies: 223
-- Data for Name: bahanpen; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.bahanpen VALUES ('BP-AAA/0001', 'Kartu nama');
INSERT INTO public.bahanpen VALUES ('BP-AAA/0002', 'Packaging');
INSERT INTO public.bahanpen VALUES ('BP-AAA/0003', 'Garpu');
INSERT INTO public.bahanpen VALUES ('BP-AAA/0004', 'Baking Paper');
INSERT INTO public.bahanpen VALUES ('BP-AAA/0005', 'Termapack');
INSERT INTO public.bahanpen VALUES ('BP-AAA/0006', 'Cover alas packaging');


--
-- TOC entry 3474 (class 0 OID 204917)
-- Dependencies: 226
-- Data for Name: bbproduk; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3472 (class 0 OID 196729)
-- Dependencies: 224
-- Data for Name: biaya_bb; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.biaya_bb VALUES ('BKK-AAA/0001', 'BB-AAA/0005', 3100000, 'SUP-AAA/0003', '2023-02-22');
INSERT INTO public.biaya_bb VALUES ('BKK-AAA/0002', 'BB-AAA/0001', 1800000, 'SUP-AAA/0001', '2023-02-23');
INSERT INTO public.biaya_bb VALUES ('BKK-AAA/0003', 'BB-AAA/0001', 1800000, 'SUP-AAA/0001', '2023-02-23');
INSERT INTO public.biaya_bb VALUES ('BKK-AAA/0004', 'BB-AAA/0003', 2200000, 'SUP-AAA/0001', '2023-02-21');


--
-- TOC entry 3468 (class 0 OID 180312)
-- Dependencies: 220
-- Data for Name: bop; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3469 (class 0 OID 180315)
-- Dependencies: 221
-- Data for Name: btkl; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3461 (class 0 OID 163938)
-- Dependencies: 213
-- Data for Name: buku_besar; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3484 (class 0 OID 213154)
-- Dependencies: 237
-- Data for Name: customer; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.customer VALUES ('CUS-AAA/0001', 'Amanda', 'Purwakarta', '08897700698');


--
-- TOC entry 3476 (class 0 OID 204923)
-- Dependencies: 228
-- Data for Name: dc001; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.dc001 VALUES ('BB-AAA/0001 - Dark Chocolate - gram', 100);
INSERT INTO public.dc001 VALUES ('BB-AAA/0006 - Whipping cream - gram', 50);
INSERT INTO public.dc001 VALUES ('BB-AAA/0007 - Butter - gram', 3);
INSERT INTO public.dc001 VALUES ('BB-AAA/0003 - White Chocolate - gram', 120);
INSERT INTO public.dc001 VALUES ('BB-AAA/0003 - White Chocolate - gram', 120);


--
-- TOC entry 3480 (class 0 OID 204937)
-- Dependencies: 232
-- Data for Name: detail_produk; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.detail_produk VALUES ('DC-002', 'BB-AAA/0001 - Dark Chocolate - gram', 100, 'BB-AAA/0001');
INSERT INTO public.detail_produk VALUES ('DC-002', 'BB-AAA/0006 - Whipping cream - gram', 50, 'BB-AAA/0006');
INSERT INTO public.detail_produk VALUES ('DC-002', 'BB-AAA/0007 - Butter - gram', 3, 'BB-AAA/0007');
INSERT INTO public.detail_produk VALUES ('MCA-002', 'BB-AAA/0003 - White Chocolate - gram', 120, 'BB-AAA/0003');
INSERT INTO public.detail_produk VALUES ('MCA-002', 'BB-AAA/0018 - Cream - ml', 40, 'BB-AAA/0018');
INSERT INTO public.detail_produk VALUES ('MCA-002', 'BB-AAA/0008 - Matcha Powder - gram', 5, 'BB-AAA/0008');
INSERT INTO public.detail_produk VALUES ('MCA-002', 'BB-AAA/0012 - Unsalted Butter - gram', 3, 'BB-AAA/0012');
INSERT INTO public.detail_produk VALUES ('TC-001', 'BB-AAA/0003 - White Chocolate - gram', 120, 'BB-AAA/0003');
INSERT INTO public.detail_produk VALUES ('TC-001', 'BB-AAA/0018 - Cream - ml', 40, 'BB-AAA/0018');
INSERT INTO public.detail_produk VALUES ('TC-001', 'BB-AAA/0013 - Taro Powder - gram', 4, 'BB-AAA/0013');
INSERT INTO public.detail_produk VALUES ('TC-001', 'BB-AAA/0012 - Unsalted Butter - gram', 3, 'BB-AAA/0012');
INSERT INTO public.detail_produk VALUES ('WCA-001', 'BB-AAA/0003 - White Chocolate - gram', 120, 'BB-AAA/0003');
INSERT INTO public.detail_produk VALUES ('WCA-001', 'BB-AAA/0018 - Cream - ml', 40, 'BB-AAA/0018');
INSERT INTO public.detail_produk VALUES ('WCA-001', 'BB-AAA/0014 - Vanilla Powder - gram', 5, 'BB-AAA/0014');
INSERT INTO public.detail_produk VALUES ('WCA-001', 'BB-AAA/0012 - Unsalted Butter - gram', 3, 'BB-AAA/0012');
INSERT INTO public.detail_produk VALUES ('CG-001', 'BB-AAA/0004 - Caramel Chocolate - gram', 100, 'BB-AAA/0004');
INSERT INTO public.detail_produk VALUES ('CG-001', 'BB-AAA/0018 - Cream - ml', 50, 'BB-AAA/0018');
INSERT INTO public.detail_produk VALUES ('CG-001', 'BB-AAA/0012 - Unsalted Butter - gram', 4, 'BB-AAA/0012');
INSERT INTO public.detail_produk VALUES ('CG-001', 'BB-AAA/0015 - Cinammon Crumb - gram', 10, 'BB-AAA/0015');
INSERT INTO public.detail_produk VALUES ('CG-001', 'BB-AAA/0011 - Gula - gram', 12, 'BB-AAA/0011');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0005 - Berry Chocolate - gram', 100, 'BB-AAA/0005');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0003 - White Chocolate - gram', 25, 'BB-AAA/0003');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0018 - Cream - ml', 65, 'BB-AAA/0018');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0016 - Mascarpone - gram', 30, 'BB-AAA/0016');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0012 - Unsalted Butter - gram', 3, 'BB-AAA/0012');
INSERT INTO public.detail_produk VALUES ('BC-001', 'BB-AAA/0017 - Strawberry Powder - gram', 5, 'BB-AAA/0017');
INSERT INTO public.detail_produk VALUES ('', 'BC-001 - Signature Series - Berry Cheese - box', 2, 'BC-001 - Si');
INSERT INTO public.detail_produk VALUES ('MC-002', 'BB-AAA/0003 - White Chocolate - gram', 100, 'BB-AAA/0003');
INSERT INTO public.detail_produk VALUES ('MC-002', 'BB-AAA/0007 - Butter - gram', 3, 'BB-AAA/0007');
INSERT INTO public.detail_produk VALUES ('MC-002', 'BB-AAA/0011 - Gula - gram', 3, 'BB-AAA/0011');
INSERT INTO public.detail_produk VALUES ('', 'CG-001', 3, 'CG-001');


--
-- TOC entry 3486 (class 0 OID 221326)
-- Dependencies: 239
-- Data for Name: detailproduksi; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3482 (class 0 OID 213126)
-- Dependencies: 234
-- Data for Name: gambar; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3460 (class 0 OID 163929)
-- Dependencies: 212
-- Data for Name: jurnal_umum; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.jurnal_umum VALUES (59, '2023-02-22', 'BKK-AAA/0001', 'Persediaan Bahan Baku', '121', 3100000, 0);
INSERT INTO public.jurnal_umum VALUES (60, '2023-02-22', 'BKK-AAA/0001', '&nbsp; &nbsp; Kas', '111', 0, 3100000);
INSERT INTO public.jurnal_umum VALUES (61, '2023-02-23', 'BKK-AAA/0002', 'Persediaan Bahan Baku', '121', 1800000, 0);
INSERT INTO public.jurnal_umum VALUES (62, '2023-02-23', 'BKK-AAA/0002', '&nbsp; &nbsp; Kas', '111', 0, 1800000);
INSERT INTO public.jurnal_umum VALUES (63, '2023-02-23', 'BKK-AAA/0003', 'Persediaan Bahan Baku', '121', 1800000, 0);
INSERT INTO public.jurnal_umum VALUES (64, '2023-02-23', 'BKK-AAA/0003', '&nbsp; &nbsp; Kas', '111', 0, 1800000);
INSERT INTO public.jurnal_umum VALUES (65, '2023-02-21', 'BKK-AAA/0004', 'Persediaan Bahan Baku', '121', 2200000, 0);
INSERT INTO public.jurnal_umum VALUES (66, '2023-02-21', 'BKK-AAA/0004', '&nbsp; &nbsp; Kas', '111', 0, 2200000);


--
-- TOC entry 3466 (class 0 OID 180306)
-- Dependencies: 218
-- Data for Name: lap_hpp; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3477 (class 0 OID 204926)
-- Dependencies: 229
-- Data for Name: mc002; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.mc002 VALUES ('BB-AAA/0002 - Milk Chocolate - gram', 100);
INSERT INTO public.mc002 VALUES ('BB-AAA/0006 - Whipping cream - gram', 50);
INSERT INTO public.mc002 VALUES ('BB-AAA/0007 - Butter - gram', 3);


--
-- TOC entry 3478 (class 0 OID 204929)
-- Dependencies: 230
-- Data for Name: mca002; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.mca002 VALUES ('BB-AAA/0003 - White Chocolate - gram', 120);


--
-- TOC entry 3485 (class 0 OID 221318)
-- Dependencies: 238
-- Data for Name: minta_produk; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.minta_produk VALUES ('2023-05-24', 'NP-AAA/0001', '', '', '');
INSERT INTO public.minta_produk VALUES ('2023-05-27', 'NP-AAA/0002', '', '', '');


--
-- TOC entry 3467 (class 0 OID 180309)
-- Dependencies: 219
-- Data for Name: neraca; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3465 (class 0 OID 180303)
-- Dependencies: 217
-- Data for Name: pegawai; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3458 (class 0 OID 163921)
-- Dependencies: 210
-- Data for Name: pelanggan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3470 (class 0 OID 180318)
-- Dependencies: 222
-- Data for Name: pembelianbb; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3457 (class 0 OID 163914)
-- Dependencies: 209
-- Data for Name: pengguna; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.pengguna VALUES ('riri@gmail.com', 'admin', 'bendahara', 'riri', 'majalaya', '08112762918');
INSERT INTO public.pengguna VALUES ('dini@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'bendahara', 'dini', 'jakarta', '0821588192');
INSERT INTO public.pengguna VALUES ('sena@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'bendahara', 'Sena', 'Tubagus', '0821588192');


--
-- TOC entry 3481 (class 0 OID 204943)
-- Dependencies: 233
-- Data for Name: persediaan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 3473 (class 0 OID 204912)
-- Dependencies: 225
-- Data for Name: produkjadi; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.produkjadi VALUES ('DC-002', 'Dark Chocolate', 'box', 55000, 'gambar');
INSERT INTO public.produkjadi VALUES ('MC-002', 'Milk Chocolate', 'box', 60500, 'gambar');
INSERT INTO public.produkjadi VALUES ('TC-001', 'Taro Chocolate', 'box', 55000, 'gambar');
INSERT INTO public.produkjadi VALUES ('WCA-001', 'White Chocolate', 'box', 55000, 'gambar');
INSERT INTO public.produkjadi VALUES ('CG-001', 'Signature Series - Classic Gold', 'box', 85500, 'gambar');
INSERT INTO public.produkjadi VALUES ('BC-001', 'Signature Series - Berry Cheese', 'box', 88500, 'gambar');
INSERT INTO public.produkjadi VALUES ('MCA-002', 'Matcha Chocolate', 'box', 63500, 'gambar');


--
-- TOC entry 3463 (class 0 OID 180297)
-- Dependencies: 215
-- Data for Name: suplier; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.suplier VALUES ('SUP-AAA/0001', 'PD Sejati', '0217789201', 'Subang');


--
-- TOC entry 3479 (class 0 OID 204934)
-- Dependencies: 231
-- Data for Name: tc001; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tc001 VALUES ('BB-AAA/0003 - White Chocolate - gram', 120);


--
-- TOC entry 3483 (class 0 OID 213142)
-- Dependencies: 235
-- Data for Name: tju; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tju VALUES ('2023-02-22', 'BKK-AAA/0001', '111', 'Kas', '121', 'Persediaan bahan baku', 3100000);
INSERT INTO public.tju VALUES ('2023-02-23', 'BKK-AAA/0002', '111', 'Kas', '121', 'Persediaan bahan baku', 1800000);
INSERT INTO public.tju VALUES ('2023-02-23', 'BKK-AAA/0003', '111', 'Kas', '121', 'Persediaan bahan baku', 1800000);
INSERT INTO public.tju VALUES ('2023-02-21', 'BKK-AAA/0004', '111', 'Kas', '121', 'Persediaan bahan baku', 2200000);


--
-- TOC entry 3494 (class 0 OID 0)
-- Dependencies: 211
-- Name: jurnal_umum_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jurnal_umum_id_seq', 66, true);


--
-- TOC entry 3290 (class 2606 OID 163952)
-- Name: admin admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (email);


--
-- TOC entry 3294 (class 2606 OID 180335)
-- Name: bahanbaku bahanbaku_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bahanbaku
    ADD CONSTRAINT bahanbaku_pk PRIMARY KEY (kd_bb);


--
-- TOC entry 3308 (class 2606 OID 180331)
-- Name: bahanpen bahanpen_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bahanpen
    ADD CONSTRAINT bahanpen_pk PRIMARY KEY (kode_bp);


--
-- TOC entry 3310 (class 2606 OID 196733)
-- Name: biaya_bb biaya_bb_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.biaya_bb
    ADD CONSTRAINT biaya_bb_pk PRIMARY KEY (bukti);


--
-- TOC entry 3302 (class 2606 OID 180325)
-- Name: bop bop_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.bop
    ADD CONSTRAINT bop_pk PRIMARY KEY (total, bukti);


--
-- TOC entry 3304 (class 2606 OID 180327)
-- Name: btkl btkl_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.btkl
    ADD CONSTRAINT btkl_pk PRIMARY KEY (bukti);


--
-- TOC entry 3288 (class 2606 OID 196735)
-- Name: buku_besar buku_besar_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.buku_besar
    ADD CONSTRAINT buku_besar_pk PRIMARY KEY (kdakun);


--
-- TOC entry 3314 (class 2606 OID 213160)
-- Name: customer customer_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_pk PRIMARY KEY (id_cus);


--
-- TOC entry 3286 (class 2606 OID 163936)
-- Name: jurnal_umum jurnal_umum_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.jurnal_umum
    ADD CONSTRAINT jurnal_umum_pkey PRIMARY KEY (id);


--
-- TOC entry 3298 (class 2606 OID 196739)
-- Name: lap_hpp lap_hpp_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.lap_hpp
    ADD CONSTRAINT lap_hpp_pk PRIMARY KEY (tanggal);


--
-- TOC entry 3316 (class 2606 OID 221325)
-- Name: minta_produk minta_produk_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.minta_produk
    ADD CONSTRAINT minta_produk_pk PRIMARY KEY (no_produk);


--
-- TOC entry 3300 (class 2606 OID 196737)
-- Name: neraca neraca_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.neraca
    ADD CONSTRAINT neraca_pk PRIMARY KEY (ref);


--
-- TOC entry 3296 (class 2606 OID 196728)
-- Name: pegawai pegawai_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pegawai
    ADD CONSTRAINT pegawai_pk PRIMARY KEY (id_pegawai);


--
-- TOC entry 3284 (class 2606 OID 163927)
-- Name: pelanggan pelanggan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pelanggan
    ADD CONSTRAINT pelanggan_pkey PRIMARY KEY (noid);


--
-- TOC entry 3306 (class 2606 OID 180329)
-- Name: pembelianbb pembelianbb_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pembelianbb
    ADD CONSTRAINT pembelianbb_pk PRIMARY KEY (bukti);


--
-- TOC entry 3282 (class 2606 OID 163920)
-- Name: pengguna pengguna_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pengguna
    ADD CONSTRAINT pengguna_pkey PRIMARY KEY (email);


--
-- TOC entry 3312 (class 2606 OID 204916)
-- Name: produkjadi produkjadi_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produkjadi
    ADD CONSTRAINT produkjadi_pk PRIMARY KEY (kd_pj);


--
-- TOC entry 3292 (class 2606 OID 180333)
-- Name: suplier suplier_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.suplier
    ADD CONSTRAINT suplier_pk PRIMARY KEY (kd_sup);


-- Completed on 2023-05-18 20:10:43

--
-- PostgreSQL database dump complete
--

