class AddTitleFieldsToContentBlocks < ActiveRecord::Migration
  def up
    add_column :gist_blocks, :title, :string
  end
end
