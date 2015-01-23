class Student < ActiveRecord::Base
  include Brb::Model::Basic

  validates_presence_of :first_name, :last_name, :username

  before_save :add_email_and_url

  belongs_to :course

  scope :by_name, -> {
    order(:last_name)
  }

  has_heading 'First Name', link: 'first_name'
  has_heading 'Last Name', link: 'last_name', default: true
  has_heading 'Website', link: 'url'

  def full_name
    "#{first_name} #{last_name}"
  end

  def self.flat_list
    by_name.collect{ |s| [s.full_name, s.url] }
  end

  private

  def add_email_and_url
    if username.present?
      self.email = "#{username}@newschool.edu"
      self.url = "http://#{username}.github.io"
    end
  end


end
