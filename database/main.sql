/*
 Navicat Premium Data Transfer

 Source Server         : vvv
 Source Server Type    : SQLite
 Source Server Version : 3030001
 Source Schema         : main

 Target Server Type    : SQLite
 Target Server Version : 3030001
 File Encoding         : 65001

 Date: 14/01/2020 03:43:33
*/

PRAGMA foreign_keys = false;

-- ----------------------------
-- Table structure for _cities_content_old_20190723
-- ----------------------------
DROP TABLE IF EXISTS "_cities_content_old_20190723";
CREATE TABLE "_cities_content_old_20190723" (
  "docid" INTEGER,
  "c0id" INTEGER,
  "c1latitude" TEXT,
  "c2longitude" TEXT,
  "c3region_id" INTEGER,
  "c4phone" TEXT,
  "c5website" TEXT,
  "c6email" TEXT,
  "c7thumbnail" TEXT,
  "c8title" TEXT,
  "c9description" TEXT,
  "c10wysiwyg" TEXT,
  "c11tags" TEXT,
  "c12sum_love" TEXT,
  "c13sum_review" TEXT,
  "c14avg_rating" TEXT,
  "c15weight" TEXT,
  "c16suggestion" TEXT,
  "c17last_update" TEXT,
  "c18searchData" TEXT,
  "c19UNIQUE" TEXT,
  PRIMARY KEY ("docid")
);

-- ----------------------------
-- Table structure for _users_old_20190726
-- ----------------------------
DROP TABLE IF EXISTS "_users_old_20190726";
CREATE TABLE "_users_old_20190726" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "name" varchar NOT NULL,
  "email" varchar NOT NULL,
  "password" varchar NOT NULL,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime
);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS "categories";
CREATE TABLE "categories" (

);

-- ----------------------------
-- Table structure for categories_booking
-- ----------------------------
DROP TABLE IF EXISTS "categories_booking";
CREATE TABLE "categories_booking" (
  "id" INTEGER NOT NULL,
  "name" TEXT,
  "category_id" INTEGER,
  PRIMARY KEY ("id")
);

-- ----------------------------
-- Table structure for categories_content
-- ----------------------------
DROP TABLE IF EXISTS "categories_content";
CREATE TABLE "categories_content" (
  "docid" INTEGER NOT NULL,
  "c0id" INTEGER NOT NULL,
  "c1parent_id" INTEGER,
  "c2weight" INTEGER,
  "c3title" TEXT,
  "c4description" TEXT,
  "c5wysiwyg" TEXT,
  "c6tags" TEXT,
  "c7searchData" TEXT,
  "c8UNIQUE" TEXT,
  PRIMARY KEY ("docid")
);

-- ----------------------------
-- Table structure for categories_segdir
-- ----------------------------
DROP TABLE IF EXISTS "categories_segdir";
CREATE TABLE "categories_segdir" (
  "level" INTEGER,
  "idx" INTEGER,
  "start_block" INTEGER,
  "leaves_end_block" INTEGER,
  "end_block" INTEGER,
  "root" BLOB,
  PRIMARY KEY ("level", "idx")
);

-- ----------------------------
-- Table structure for categories_segments
-- ----------------------------
DROP TABLE IF EXISTS "categories_segments";
CREATE TABLE "categories_segments" (
  "blockid" INTEGER,
  "block" BLOB,
  PRIMARY KEY ("blockid")
);

-- ----------------------------
-- Table structure for categories_vietnam
-- ----------------------------
DROP TABLE IF EXISTS "categories_vietnam";
CREATE TABLE "categories_vietnam" (
  "id" INTEGER NOT NULL,
  "name" INTEGER,
  "category_id" INTEGER,
  PRIMARY KEY ("id")
);

-- ----------------------------
-- Table structure for cities
-- ----------------------------
DROP TABLE IF EXISTS "cities";
CREATE TABLE "cities" (

);

-- ----------------------------
-- Table structure for cities_content
-- ----------------------------
DROP TABLE IF EXISTS "cities_content";
CREATE TABLE "cities_content" (
  "docid" INTEGER PRIMARY KEY AUTOINCREMENT,
  "c0id" INTEGER,
  "c1latitude" TEXT,
  "c2longitude" TEXT,
  "c3region_id" INTEGER,
  "c4phone" TEXT,
  "c5website" TEXT,
  "c6email" TEXT,
  "c7thumbnail" TEXT,
  "c8title" TEXT,
  "c9description" TEXT,
  "c10wysiwyg" TEXT,
  "c11tags" TEXT,
  "c12sum_love" TEXT,
  "c13sum_review" TEXT,
  "c14avg_rating" TEXT,
  "c15weight" TEXT,
  "c16suggestion" TEXT,
  "c17last_update" TEXT,
  "c18searchData" TEXT,
  "c19UNIQUE" TEXT
);

-- ----------------------------
-- Table structure for cities_segdir
-- ----------------------------
DROP TABLE IF EXISTS "cities_segdir";
CREATE TABLE "cities_segdir" (
  "level" INTEGER,
  "idx" INTEGER,
  "start_block" INTEGER,
  "leaves_end_block" INTEGER,
  "end_block" INTEGER,
  "root" BLOB,
  PRIMARY KEY ("level", "idx")
);

-- ----------------------------
-- Table structure for cities_segments
-- ----------------------------
DROP TABLE IF EXISTS "cities_segments";
CREATE TABLE "cities_segments" (
  "blockid" INTEGER,
  "block" BLOB,
  PRIMARY KEY ("blockid")
);

-- ----------------------------
-- Table structure for hotlines
-- ----------------------------
DROP TABLE IF EXISTS "hotlines";
CREATE TABLE "hotlines" (
  "id" INTEGER NOT NULL,
  "title" TEXT,
  PRIMARY KEY ("id")
);

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS "locations";
CREATE TABLE "locations" (

);

-- ----------------------------
-- Table structure for locations_content
-- ----------------------------
DROP TABLE IF EXISTS "locations_content";
CREATE TABLE "locations_content" (
  "docid" INTEGER,
  "c0id" INTEGER,
  "c1latitude" TEXT,
  "c2longitude" TEXT,
  "c3address" TEXT,
  "c4phone" TEXT,
  "c5website" TEXT,
  "c6email" TEXT,
  "c7category_id" INTEGER,
  "c8city_id" INTEGER,
  "c9thumbnail" TEXT,
  "c10title" TEXT,
  "c11description" TEXT,
  "c12wysiwyg" TEXT,
  "c13tags" TEXT,
  "c14sum_love" TEXT,
  "c15sum_review" TEXT,
  "c16avg_rating" TEXT,
  "c17weight" INTEGER,
  "c18star" TEXT,
  "c19price" TEXT,
  "c20owner_id" INTEGER,
  "c21type" INTEGER,
  "c22suggestion" INTEGER,
  "c23feature" INTEGER,
  "c24feature_expired" TEXT,
  "c25start_date" TEXT,
  "c26end_date" TEXT,
  "c27verify" INTEGER,
  "c28verify_date" TEXT,
  "c29created_at" TEXT,
  "c30updated_at" TEXT,
  "c31searchData" TEXT,
  "c32UNIQUE" TEXT,
  PRIMARY KEY ("docid")
);

-- ----------------------------
-- Table structure for locations_segdir
-- ----------------------------
DROP TABLE IF EXISTS "locations_segdir";
CREATE TABLE "locations_segdir" (
  "level" INTEGER,
  "idx" INTEGER,
  "start_block" INTEGER,
  "leaves_end_block" INTEGER,
  "end_block" INTEGER,
  "root" BLOB,
  PRIMARY KEY ("level", "idx")
);

-- ----------------------------
-- Table structure for locations_segments
-- ----------------------------
DROP TABLE IF EXISTS "locations_segments";
CREATE TABLE "locations_segments" (
  "blockid" INTEGER,
  "block" BLOB,
  PRIMARY KEY ("blockid")
);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "migrations";
CREATE TABLE "migrations" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "migration" varchar NOT NULL,
  "batch" integer NOT NULL
);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS "password_resets";
CREATE TABLE "password_resets" (
  "email" varchar NOT NULL,
  "token" varchar NOT NULL,
  "created_at" datetime
);

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS "post";
CREATE TABLE "post" (

);

-- ----------------------------
-- Table structure for post_content
-- ----------------------------
DROP TABLE IF EXISTS "post_content";
CREATE TABLE "post_content" (
  "docid" INTEGER NOT NULL,
  "c0id" INTEGER NOT NULL,
  "c1city_id" INTEGER,
  "c2location_id" INTEGER,
  "c3language_id" INTEGER,
  "c4thumbnail" TEXT,
  "c5title" TEXT,
  "c6description" TEXT,
  "c7wysiwyg" TEXT,
  "c8feature" INTEGER,
  "c9type" TEXT,
  "c10source" TEXT,
  "c11url" TEXT,
  "c12start_date" TEXT,
  "c13end_date" TEXT,
  "c14created_at" TEXT,
  "c15updated_at" TEXT,
  "c16searchData" TEXT,
  "c17UNIQUE" TEXT,
  PRIMARY KEY ("docid")
);

-- ----------------------------
-- Table structure for post_segdir
-- ----------------------------
DROP TABLE IF EXISTS "post_segdir";
CREATE TABLE "post_segdir" (
  "level" INTEGER,
  "idx" INTEGER,
  "start_block" INTEGER,
  "leaves_end_block" INTEGER,
  "end_block" INTEGER,
  "root" BLOB,
  PRIMARY KEY ("level", "idx")
);

-- ----------------------------
-- Table structure for post_segments
-- ----------------------------
DROP TABLE IF EXISTS "post_segments";
CREATE TABLE "post_segments" (
  "blockid" INTEGER,
  "block" BLOB,
  PRIMARY KEY ("blockid")
);

-- ----------------------------
-- Table structure for sqlite_sequence
-- ----------------------------
DROP TABLE IF EXISTS "sqlite_sequence";
CREATE TABLE "sqlite_sequence" (
  "name" ,
  "seq" 
);

-- ----------------------------
-- Table structure for travellocation
-- ----------------------------
DROP TABLE IF EXISTS "travellocation";
CREATE TABLE "travellocation" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "address" varchar NOT NULL,
  "phone" varchar NOT NULL,
  "email" varchar NOT NULL
);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "users";
CREATE TABLE "users" (
  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  "name" varchar NOT NULL,
  "email" varchar NOT NULL,
  "password" varchar NOT NULL,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  "role" varchar
);

-- ----------------------------
-- Auto increment value for _users_old_20190726
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 3 WHERE name = '_users_old_20190726';

-- ----------------------------
-- Auto increment value for cities_content
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 74 WHERE name = 'cities_content';

-- ----------------------------
-- Auto increment value for migrations
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 4 WHERE name = 'migrations';

-- ----------------------------
-- Indexes structure for table password_resets
-- ----------------------------
CREATE INDEX "password_resets_email_index"
ON "password_resets" (
  "email" ASC
);
CREATE INDEX "password_resets_token_index"
ON "password_resets" (
  "token" ASC
);

-- ----------------------------
-- Auto increment value for travellocation
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 3 WHERE name = 'travellocation';

-- ----------------------------
-- Auto increment value for users
-- ----------------------------
UPDATE "sqlite_sequence" SET seq = 16 WHERE name = 'users';

-- ----------------------------
-- Indexes structure for table users
-- ----------------------------
CREATE UNIQUE INDEX "users_email_unique"
ON "users" (
  "email" ASC
);

PRAGMA foreign_keys = true;
