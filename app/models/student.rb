class Student < ActiveRecord::Base
  include Concerns::Adminable
  include Concerns::CRUDTable

  validates_presence_of :first_name, :last_name, :username

  before_save :add_email_and_url

  belongs_to :course

  scope :by_name, -> {
    order(:last_name)
  }

  adminable position: 2

  has_heading 'First Name', link: 'first_name'
  has_heading 'Last Name', link: 'last_name', default: true
  has_heading 'Website', link: 'url'

  def full_name
    "#{first_name} #{last_name}"
  end

  private

  def add_email_and_url
    if username.present?
      self.email = "#{username}@newschool.edu"
      self.url = "http://a.parsons.edu/~#{username}"
    end
  end


end
