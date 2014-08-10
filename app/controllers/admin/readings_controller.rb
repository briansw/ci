class Admin::ReadingsController < Admin::ApplicationController

  private

  def reading_params
    params.require(:reading).permit(
      :title,
      :author,
      :year,
      :section,
      :link,
      :active,
      :courses,
      pdf_attributes
    )
  end

  def pdf_attributes
    {
      pdf_attributes: [
        :id,
        :attachment,
        :attachment_cache
      ]
    }
  end

end
