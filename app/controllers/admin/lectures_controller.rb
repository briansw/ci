class Admin::LecturesController < Admin::ApplicationController
  include Admin::Concerns::PermitParams

  private

  def lecture_params
    params.require(:lecture).permit(
      :title,
      :section,
      :course_id,
      :publish_on,
      :slug,
      :active,
      :readings,
      content_block_params,
      standalone_images_params
    )
  end

end
