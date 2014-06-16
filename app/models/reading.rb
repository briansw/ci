class Reading < ActiveRecord::Base
  include Concerns::Adminable
  include Concerns::CRUDTable
  include Concerns::HasImage

  has_and_belongs_to_many :courses, join_table: 'course_readings'

  adminable position: 1
  has_heading 'Title', link: 'title', default: true
  has_heading 'Author(s)', link: 'author'
  has_heading 'Year', link: 'year'

  has_image :pdf

  def courses=(records)
    if records.is_a? String
      courses = Course.where(id: records.split(',').map(&:to_i))
      super courses
    else
      super
    end
  end

  def self.years
    1900..(Time.now.year)
  end

end
