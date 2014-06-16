class Admin::LecturesController < Admin::ApplicationController

  private

    def lecture_params
      params.require(:lecture).permit(
        :title,
        :section,
        :course_id,
        :publish_on,
        :slug,
        :active
      )
    end
end
