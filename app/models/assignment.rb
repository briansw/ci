class Assignment < ActiveRecord::Base
  include Brb::Model::Full

  validates_presence_of :name

  has_heading 'Publish On', link: 'publish_on', display: :formatted_date, default: true
  has_heading 'Name', link: 'name'
  has_heading 'Section', link: 'section'
  has_heading 'Active', link: 'active'

  has_content_block :text_block
  has_content_block :image_block
  has_content_block :video_block

  belongs_to :course

  sluggable :name

  def self.active
    where(active: true).order('publish_on DESC')
  end

  def self.published
    where('publish_on <= NOW()').active
  end

  def self.studios
    active.where(section: 'Studio')
  end

  def self.labs
    active.where(section: 'Lab')
  end

  def self.current_studio
    studios.published.first
  end

  def self.current_lab
    labs.published.first
  end

  def formatted_date
    publish_on.strftime('%a, %b %-d, %Y @ %l:%M%P')
  end

end
