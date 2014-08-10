class CreateGistBlock < ActiveRecord::Migration
  def change
    create_table :gist_blocks do |t|
      t.text :embed
      t.integer :content_block_id

      t.timestamps
    end
    add_index :gist_blocks, [:content_block_id]
  end
end
