class Admin::AssignmentsController < Admin::ApplicationController

  private

  def assignment_params
    params.require(:assignment).permit(
      :name,
      :course_id,
      :section,
      :publish_on,
      :active,
      content_block_attributes
    )
  end

  def content_block_attributes
    {
      content_blocks_attributes: [
        :id,
        :_destroy,
        :parent_type,
        :parent_id,
        :position,
        :block_type,
        text_block_attributes: [
          :id,
          :title,
          :body,
          :large_size
        ],
        image_block_attributes: [
          :id,
          :title,
          :caption,
          image_attributes: [
            :id,
            :attachment,
            :attachment_cache,
            :parent_id,
            :parent_type,
          ]
        ],
        video_block_attributes: [
          :id,
          :url,
          :video_id,
          :title,
          :caption,
        ]
      ]
    }
  end
end