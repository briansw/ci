module ApplicationHelper

  def nav_link(name, path)
    link_to(name, path, class: "nounderline #{current_class(path)}")
  end

  def current_class(path)
    if current_page?(path)
      'current'
    end
  end
end
