class Admin::AssignmentsController < Admin::ApplicationController

  private

    def assignment_params
      params.require(:assignment).permit(
        :name,
        :course_id,
        :section,
        :publish_on,
        :active
      )
    end
end