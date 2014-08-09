class Admin::CoursesController < Admin::ApplicationController
  include Admin::Concerns::PermitParams

  private

    def course_params
      params.require(:course).permit(
        :year,
        :semester,
        :name,
        :active,
        standalone_images_params
      )
    end
end
