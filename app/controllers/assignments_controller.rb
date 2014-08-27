class AssignmentsController < ApplicationController

  def index
    @course = Course.current
    if @current_user.present?
      @assignments = @course.assignments.active
    else
      @assignments = @course.assignments.published
    end

  end

  def show
    @course = Course.current
    @assignment = Assignment.where(active: true, id: params[:id]).first
  end

end