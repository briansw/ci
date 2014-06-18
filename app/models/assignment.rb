class Assignment < ActiveRecord::Base
  include Concerns::Adminable
  include Concerns::CRUDTable
  include Concerns::HasContentBlocks

  validates_presence_of :name

  adminable position: 4

  has_heading 'Name', link: 'name', default: true
  has_heading 'Section', link: 'section'
  has_heading 'Active', link: 'active'

  has_content_block 'TextBlock'
  has_content_block 'ImageBlock'
  has_content_block 'VideoBlock'

  belongs_to :course

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


end
