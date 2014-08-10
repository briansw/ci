class ReadingsController < ApplicationController

  def index
    @course = Course.current
    @readings = @course.readings.active.order(:year)
  end

end
