class AddServiceFieldToVideoBlock < ActiveRecord::Migration
  def change
    add_column :video_blocks, :service, :string
  end
end
