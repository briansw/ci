class Course < ActiveRecord::Base
  include Concerns::Adminable
  include Concerns::CRUDTable

  validates_presence_of :year, :semester

  adminable position: 1

  has_heading 'Year', link: 'year', default: true
  has_heading 'Semester', link: 'semester'
  has_heading 'Active', link: 'active'

  has_many :students
  has_many :lectures
  has_many :assignments
  has_and_belongs_to_many :readings, join_table: 'course_readings'

  before_save :set_course_name

  def self.years
    2011..(Time.now.year + 1)
  end

  def self.semesters
    %w(Fall Spring Summer)
  end

  def self.sections
    %w(Studio Lab)
  end

  def self.current
    active.order('year DESC, semester DESC').limit(1).first
  end

  def self.active
    all.where(active: true).order('year DESC, semester DESC')
  end

  private

  def set_course_name
    self.name = "#{semester} #{year}"
  end

end
