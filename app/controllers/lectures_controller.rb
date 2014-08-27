class LecturesController < ApplicationController

  def index
    @course = Course.current
    if @current_user.present?
      @lectures = @course.lectures.active
    else
      @lectures = @course.lectures.published
    end

  end

  def show
    @course = Course.current
    @lecture = Lecture.where(active: true, id: params[:id]).first
  end

end
