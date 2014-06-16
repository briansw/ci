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

ActiveRecord::Schema.define(version: 20140616005604) do

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

end
