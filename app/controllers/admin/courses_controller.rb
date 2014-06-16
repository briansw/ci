class Admin::CoursesController < Admin::ApplicationController

  private

    def course_params
      params.require(:course).permit(
        :year,
        :semester,
        :name,
        :active
      )
    end
end
