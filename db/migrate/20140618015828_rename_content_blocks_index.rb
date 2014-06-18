class RenameContentBlocksIndex < ActiveRecord::Migration
  def change
    rename_index :content_blocks, 
      'index_content_blocks_on_parent_type_and_parent_id_and_block_type',
      'index_content_blocks_on_parent_type_etc'
  end
end
