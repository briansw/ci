class Admin::StudentsController < Admin::ApplicationController

  private

    def student_params
      params.require(:student).permit(
        :first_name,
        :last_name,
        :username,
        :email,
        :url,
        :course_id
      )
    end
end
