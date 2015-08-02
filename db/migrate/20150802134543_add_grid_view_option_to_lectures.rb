class AddGridViewOptionToLectures < ActiveRecord::Migration
  def change
    add_column :lectures, :grid_view, :boolean, default: false
  end
end
