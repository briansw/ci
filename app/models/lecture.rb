class Lecture < ActiveRecord::Base
  include Brb::Model::Full

  validates_presence_of :title

  has_heading 'Title', link: 'title', default: true
  has_heading 'Section', link: 'section'
  has_heading 'Active', link: 'active'

  has_and_belongs_to_many :readings, join_table: 'lecture_readings'
  belongs_to :course

  has_content_block :text_block
  has_content_block :image_block
  has_content_block :video_block
  has_content_block :gist_block
  has_content_block :note_block

  def self.active
    where(active: true).order('publish_on DESC')
  end

  def self.studios
    active.where(section: 'Studio')
  end

  def self.labs
    active.where(section: 'Lab')
  end


  def self.current_studio
    studios.first
  end

  def self.current_lab
    labs.first
  end

  def readings=(records)
    if records.is_a? String
      courses = Reading.where(id: records.split(',').map(&:to_i))
      super courses
    else
      super
    end
  end

end
