class LecturesController < ApplicationController

  def index
    @course = Course.current
    @lectures = @course.lectures.published
  end

  def show
    @course = Course.current
    @lecture = Lecture.where(active: true, id: params[:id]).first
  end

end
