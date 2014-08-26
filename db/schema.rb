# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20140826021929) do

  create_table "assignments", force: true do |t|
    t.integer  "course_id"
    t.string   "name"
    t.datetime "publish_on"
    t.string   "section"
    t.string   "slug"
    t.boolean  "active",     default: true
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "content_blocks", force: true do |t|
    t.integer  "parent_id"
    t.string   "parent_type"
    t.string   "block_type"
    t.integer  "position"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "content_blocks", ["parent_type", "parent_id", "block_type"], name: "index_content_blocks_on_parent_type_etc", using: :btree

  create_table "course_readings", force: true do |t|
    t.integer  "course_id"
    t.integer  "reading_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "courses", force: true do |t|
    t.integer  "year"
    t.string   "semester"
    t.boolean  "active",     default: true
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "name"
  end

  create_table "gist_blocks", force: true do |t|
    t.text     "embed"
    t.integer  "content_block_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "gist_blocks", ["content_block_id"], name: "index_gist_blocks_on_content_block_id", using: :btree

  create_table "image_blocks", force: true do |t|
    t.string   "title"
    t.text     "caption"
    t.integer  "content_block_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "image_blocks", ["content_block_id"], name: "index_image_blocks_on_content_block_id", using: :btree

  create_table "images", force: true do |t|
    t.string   "attachment"
    t.integer  "parent_id"
    t.string   "parent_type"
    t.string   "relationship_name"
    t.text     "caption"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "images", ["parent_id", "parent_type"], name: "index_images_on_parent_id_and_parent_type", using: :btree

  create_table "lecture_readings", force: true do |t|
    t.integer "lecture_id"
    t.integer "reading_id"
  end

  create_table "lectures", force: true do |t|
    t.string   "title"
    t.string   "section"
    t.integer  "course_id"
    t.string   "slug"
    t.datetime "publish_on", default: '2014-06-12 01:11:19'
    t.boolean  "active",     default: true
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "note_blocks", force: true do |t|
    t.string   "title"
    t.text     "body"
    t.integer  "content_block_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "note_blocks", ["content_block_id"], name: "index_note_blocks_on_content_block_id", using: :btree

  create_table "readings", force: true do |t|
    t.string   "title"
    t.string   "author"
    t.integer  "year"
    t.string   "link"
    t.string   "section"
    t.boolean  "active",     default: true
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "students", force: true do |t|
    t.string   "first_name"
    t.string   "last_name"
    t.string   "username"
    t.string   "email"
    t.string   "url"
    t.integer  "course_id"
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "text_blocks", force: true do |t|
    t.string   "title"
    t.integer  "content_block_id"
    t.text     "body"
    t.boolean  "large_size",       default: false
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  add_index "text_blocks", ["content_block_id"], name: "index_text_blocks_on_content_block_id", using: :btree

  create_table "users", force: true do |t|
    t.string   "first_name"
    t.string   "last_name"
    t.string   "username"
    t.string   "email"
    t.string   "password_digest"
    t.boolean  "is_admin",        default: false
    t.boolean  "is_sysop",        default: false
    t.boolean  "active",          default: true
    t.datetime "created_at"
    t.datetime "updated_at"
  end

  create_table "video_blocks", force: true do |t|
    t.text     "url"
    t.text     "video_id"
    t.string   "title"
    t.text     "caption"
    t.integer  "content_block_id"
    t.datetime "created_at"
    t.datetime "updated_at"
    t.string   "service"
  end

end
