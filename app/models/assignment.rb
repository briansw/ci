class Assignment < ActiveRecord::Base
  include Concerns::Adminable
  include Concerns::CRUDTable

  validates_presence_of :title

  adminable position: 4

  has_heading 'Name', link: 'title', default: true
  has_heading 'Section', link: 'section'
  has_heading 'Active', link: 'active'

  belongs_to :course

  def self.active
    where(active: true).order('publish_on DESC')
  end


end
